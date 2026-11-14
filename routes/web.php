<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return "Hallo namaku adalah Laravel, Salam Kenal";
});

// Route controller Web
Route::get('/web', [Web::class, 'home']);
Route::get('/profil', [Web::class, 'profil']);
Route::get('/profil/{nama}', [Web::class, 'profil']); 

// Route controller Dashboard
Route::get('/home', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detailProduct']);
Route::get('/about', [DashboardController::class, 'about']);

// Route biodata
Route::get('/biodata', [Web::class, 'biodata']);

// Route kalkulator umum
Route::get('/kalkulator', [KalkulatorController::class, 'home']);
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);

// Latihan 1: Daftar Mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// Latihan 2: Kalkulator Segitiga
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
