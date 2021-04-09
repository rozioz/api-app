<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\SambungBaru;
use App\Http\Controllers\Controller;

class SambungBaruController extends Controller
{
    function result($status, $message, $data = null) {
        $result = array(
            'status' => $status,
            'message' => $message,
            'data' => $data
        );
        return response()->json($result);
    }
    // GET ALL DATA
    public function all_data() {
        $data = SambungBaru::all();
        if(empty($data)){
            return $this->result(404, 'Data tidak ditemukan');
        }
        return $this->result(200, 'OK', $data);
    }
    
    public function all_data_table() {
        $data = SambungBaru::paginate(10);
        if(empty($data)){
            return $this->result(404, 'Data tidak ditemukan');
        }
        return $this->result(200, 'OK', $data);
    }
    
    // GET DATA BY ID
    public function read_id($id) {
        $data = SambungBaru::find($id);
        if(empty($data)){
            return $this->result(404, 'Data tidak ditemukan');
        }
        return $this->result(200, 'OK', $data);
    }
    
    // GET DATA BY TRANSACTION NUMBER
    public function read_trx($trx) {
        $data = SambungBaru::find($trx);
        if(empty($data)){
            return $this->result(404, 'Data tidak ditemukan');
        }
        return $this->result(200, 'OK', $data);
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
        return $this->result(200, 'OK', $sb);
    }
    
    // UPDATE DATA
    public function update($id) {
        $data = SambungBaru::find($id);
        if(empty($data)){
            return $this->result(404, 'Data tidak ditemukan');
        }
        $request = request();
        $data->fill($request->all());
        $data->save();
        return $this->result(200, 'OK', $data);
    }
}
