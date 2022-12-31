<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HasilPendaftaran;
use App\Http\Controllers\AdminController;

use App\Http\Livewire\Home;
use App\Http\Livewire\HalamanPendaftaran;
use App\Http\Livewire\InformasiPendaftaran;

Route::get('/', Home::class);

Route::get('/ppdb/formulir', HalamanPendaftaran::class);
Route::get('/ppdb/informasi', InformasiPendaftaran::class);
Route::get('/ppdb/hasil', HasilPendaftaran::class);

Route::get('/admin', [AdminController::class, 'index']);