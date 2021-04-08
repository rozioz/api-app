<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\SambungBaru;
use App\Http\Controllers\Controller;

class SambungBaruController extends Controller
{
//    public function __construct(SambungBaru $model) {
//        parent::__construct($model);
//    }
    
    // GET ALL DATA
    //public function index(){
        
    //}
    public function all_data() {
        $data = SambungBaru::all();
        if(empty($data)){
            return response()->json('Data Kosong', 404);
        }
        return $data;
    }
    // GET DATA BY ID
    public function read($id) {
        $data_transaction = SambungBaru::find($id);
        if(empty($data_transaction)){
            return response()->json(array('message' => 'Data tidak ditemukan', 'status' => 404));
        }
        return $data_transaction;
    }
    // GET DATA BY TRANSACTION NUMBER
    public function read_trx($trx) {
        $data_transaction = SambungBaru::find($trx);
        if(empty($data_transaction)){
            return response()->json('Data tidak ditemukan', 404);
        }
    }
    // CREATE DATA
    public function create() {
        $request = request();
        $sb = SambungBaru::create([
            'sb_trx' => $request->sb_trx,
            'sb_nama' => $request->sb_nama,
            'sb_telp' => $request->sb_telp,
            'sb_alamat' => $request->sb_alamat,
            'sb_long' => $request->sb_long,
            'sb_lat' => $request->sb_lat,
            'sb_status_tanah' => $request->sb_status_tanah,
            'sb_tgl_daftar' => $request->sb_tgl_daftar,
        ]);
        return [
            'status' => 200,
            'message' => 'OK', 
            'saved' => $sb
        ];
    }
    // UPDATE DATA
}
