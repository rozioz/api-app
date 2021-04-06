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
    public function index(){
        
    }
    // GET DATA BY ID
    public function read($id) {
        $data_transaction = SambungBaru::find($id);
        if(empty($data_transaction)){
            return response()->json('Data tidak ditemukan', 404);
        }
        return $data_transaction;
    }
    // GET DATA BY TRANSACTION NUMBER
    // CREATE DATA
    // UPDATE DATA
}
