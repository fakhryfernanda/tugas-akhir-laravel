<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/ppdb/formulir', [RegistrationController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);