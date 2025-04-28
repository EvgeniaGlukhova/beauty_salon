<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CosmetologistController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CosmetologistServiceController;
use App\Http\Controllers\ClientServiceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LoginController;

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



Route::get('/services', [ServiceController::class, 'index']);

Route::get('/services/create', [ServiceController::class, 'create'])->middleware('auth');
Route::post('/services/store', [ServiceController::class, 'store']);
Route::get('/services/edit/{id}/', [ServiceController::class, 'edit'])->middleware('auth');
Route::post('/services/update/{id}', [ServiceController::class, 'update'])->middleware('auth');
Route::get('/services/destroy/{id}', [ServiceController::class, 'destroy'])->middleware('auth');



Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/auth', [LoginController::class, 'authenticate']);

Route::get('/error', function () {
    return view('error', ['message'=>session('message')]);
});





