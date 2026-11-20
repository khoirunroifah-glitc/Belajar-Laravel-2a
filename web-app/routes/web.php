<?php

use Illuminate\Support\Facades\Route;

// Mengimpor controller untuk route /web.
use App\Http\Controllers\Web;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\EmployeController;

Route::get('/', function () {
    return 'Halo Nama Ku adalah Laravel, Salam Kenal';
});

// Menampilkan halaman About.
Route::get('/about', function () { 
    return "<h2>Ini adalah halaman About</h2>"; 
    }); 

// Menampilkan halaman dari method home pada controller Web.
Route::get('/web', [Web::class, 'home']);

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;

// Menampilkan daftar mahasiswa.
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// Menampilkan formulir kalkulator segitiga.
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);

// Memproses input dan menampilkan hasil perhitungan luas segitiga.
Route::post('/kalkulator/segitiga/proses', [KalkulatorController::class, 'hitung_segitiga']);

Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('/gallery', [DashboardController::class, 'gallery']);

Route::get('/employe',[EmployeController::class, 'index']);
Route::get('/employe/create', [EmployeController::class, 'create']);
Route::post('/employe/store', [EmployeController::class, 'store']);
