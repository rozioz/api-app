<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\SambungBaruController;

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
            'message' => 'Pong! '.date('d-m-Y H:i:s')
        ]);
    });
    Route::prefix('sambung-baru')->group(function() {
        // read all data
        Route::get('/',[SambungBaruController::class, 'all_data']);
        
        Route::get('/',[SambungBaruController::class, 'all_data_table']);
        // create
        Route::post('/', [SambungBaruController::class, 'create']);
        // read
        Route::get('/{id}', [SambungBaruController::class, 'read_id']);
        Route::get('transaction/{trx}', [SambungBaruController::class, 'read_trx']);
        // update
        Route::put('/{id}', [SambungBaruController::class, 'update']);
    });
    
});
