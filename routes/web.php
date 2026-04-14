<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::resource('karyawan', KaryawanController::class);
Route::resource('gaji', GajiController::class);
Route::get('laporan', [LaporanController::class, 'index']);
Route::get('laporan/export', [LaporanController::class, 'export']);
Route::get('gaji/slip/{id}', [GajiController::class, 'slip'])->name('gaji.slip');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// GROUP AUTH
Route::middleware(['auth'])->group(function () {

    Route::resource('karyawan', KaryawanController::class);
    Route::resource('gaji', GajiController::class);

    Route::get('gaji/slip/{id}', [GajiController::class, 'slip'])->name('gaji.slip');

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/laporan/export', [LaporanController::class, 'export'])->name('laporan.export');
});
Route::post('/verifikasi-captcha', [GajiController::class, 'verifikasiCaptcha']);

require __DIR__ . '/auth.php';
