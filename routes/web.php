<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CosmetologistController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CosmetologistServiceController;
use App\Http\Controllers\ClientServiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello']);
});


Route::get('/cosmetologists', [CosmetologistController::class, 'index']);
Route::get('/cosmetologists/{id}', [CosmetologistController::class, 'show']);


Route::get('/appointments', [AppointmentController::class, 'index']);
Route::get('/appointments/{id}', [AppointmentController::class, 'show']);


Route::get('/clients', [ClientController::class, 'index']);
Route::get('/clients/{id}', [ClientController::class, 'show']);

Route::get('/cosmetologist_services/{id}', [CosmetologistServiceController::class, 'show']);

Route::get('/client_services/{id}', [ClientServiceController::class, 'show']);





