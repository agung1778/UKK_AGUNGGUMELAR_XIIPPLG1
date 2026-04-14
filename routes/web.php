<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect ke dashboard setelah login
Route::get('/', function () {
  return redirect('/dashboard');
});

// Dashboard (WAJIB LOGIN)
Route::get('/dashboard', [DashboardController::class, 'index'])
  ->middleware(['auth'])
  ->name('dashboard');

// GROUP AUTH
Route::middleware(['auth'])->group(function () {

  Route::resource('karyawan', KaryawanController::class);
  Route::resource('gaji', GajiController::class);

  Route::get('gaji/slip/{id}', [GajiController::class, 'slip'])->name('gaji.slip');

  Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
  Route::get('/laporan/export', [LaporanController::class, 'export'])->name('laporan.export');
});
Route::post('/verifikasi-captcha', [GajiController::class, 'verifikasiCaptcha']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
