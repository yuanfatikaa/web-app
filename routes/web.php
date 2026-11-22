<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\EmployeController;

Route::get('/', function () {
    return "Hallo namaku adalah Laravel, Salam Kenal";
});

// Route controller Web
Route::get('/web', [Web::class, 'home']);
Route::get('/profil', [Web::class, 'profil']);
Route::get('/profil/{nama}', [Web::class, 'profil']); 
Route::get('/biodata', [Web::class, 'biodata']);

// Route controller Dashboard & Templating 
Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('/gallery',[DashboardController::class, 'gallery']); 

// Route kalkulator umum & segitiga
Route::get('/kalkulator', [KalkulatorController::class, 'home']);
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);

// Route Latihan Mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/employe',[EmployeController::class, 'index']); 
Route::get('/employe/create',[EmployeController::class, 'create']); 
Route::post('/employe/store',[EmployeController::class, 'store']);
Route::get('/employe/edit/{employe}',[EmployeController::class, 'show']); 
Route::put('/employe/{employe}',[EmployeController::class, 'update']);
Route::delete('/employe/{employe}',[EmployeController::class, 'destroy']); 