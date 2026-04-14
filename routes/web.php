<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('karyawan', KaryawanController::class);

Route::get('gaji', [GajiController::class, 'index'])->name('gaji.index');
Route::get('gaji/create', [GajiController::class, 'create'])->name('gaji.create');
Route::post('gaji/store', [GajiController::class, 'store'])->name('gaji.store');
Route::delete('gaji/{id}', [GajiController::class, 'destroy'])->name('gaji.destroy');

Route::get('laporan', [LaporanController::class, 'index']);
Route::get('laporan/export', [LaporanController::class, 'export']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
