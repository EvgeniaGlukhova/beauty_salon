<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


use App\Http\Controllers\ServiceControllerApi;

Route::get('/services', [ServiceControllerApi::class, 'index']);
Route::get('/services/{id}', [ServiceControllerApi::class, 'show']);


use App\Http\Controllers\CosmetologistControllerApi;

Route::get('/cosmetologists', [CosmetologistControllerApi::class, 'index']);
Route::get('/cosmetologists/{id}', [CosmetologistControllerApi::class, 'show']);


use App\Http\Controllers\AppointmentControllerApi;

Route::get('/c', [AppointmentControllerApi::class, 'index']);
Route::get('/appointments/{id}', [AppointmentControllerApi::class, 'show']);

//Route::middleware('auth:sanctum')->get('/appointments', [AppointmentControllerApi::class, 'index']);

use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) { return $request->user();});

//Route::middleware('auth:sanctum')->get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/appointments', [AppointmentController::class, 'index']);
    Route::get('user',function(Request $request){
        return $request->user();
    });
    Route::get('/logout', [AuthController::class, 'logout']);
});
