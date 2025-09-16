<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceControllerApi;

Route::get('/services', [ServiceControllerApi::class, 'index']);
Route::get('/services/{id}', [ServiceControllerApi::class, 'show']);
