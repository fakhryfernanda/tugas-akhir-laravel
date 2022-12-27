<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PPDBController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/ppdb/formulir', [PPDBController::class, 'index']);
Route::get('/ppdb/hasil', [PPDBController::class, 'hasil']);
Route::get('/ppdb/login', [AuthController::class, 'login']);