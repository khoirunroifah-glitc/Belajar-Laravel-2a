<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'cek']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/about', function () { 
    return "<h2>Ini adalah halaman About</h2>"; 
}); 

Route::get('/web', [Web::class, 'home']);
Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('/gallery', [DashboardController::class, 'gallery']);
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga/proses', [KalkulatorController::class, 'hitung_segitiga']);

Route::get('/employe', [EmployeController::class, 'index']);
Route::get('/employe/create', [EmployeController::class, 'create']);
Route::post('/employe/store', [EmployeController::class, 'store']);
Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);
Route::put('/employe/{employe}', [EmployeController::class, 'update']);
Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);
