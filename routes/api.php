<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\SambungBaruController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->group(function(){
    Route::get('ping', function(){
        return json_encode([
            'status' => 200,
            'message' => 'Success'
        ]);
    });
    Route::prefix('sambung-baru')->group(function() {
        // create
        Route::post('/', [SambungBaru::class, 'create']);
        // read
        Route::get('/{id}', [SambungBaru::class, 'read']);
        Route::get('transaction/{trx}', [SambungBaru::class, 'readByTrx']);
        // update
        Route::patch('/{id}', [SambungBaru::class, 'update']);
    });
    
});
