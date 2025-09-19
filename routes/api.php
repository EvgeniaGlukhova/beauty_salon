<?php

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

Route::get('/appointments', [AppointmentControllerApi::class, 'index']);
Route::get('/appointments/{id}', [AppointmentControllerApi::class, 'show']);
