<?php

use App\Http\Controllers\KartuPelajarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/siswa/add', [SiswaController::class, 'create']);
    Route::post('/siswa/add', [SiswaController::class, 'store']);
    Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
    Route::post('/siswa/edit/{id}', [SiswaController::class, 'update']);
    Route::delete('/siswa/delete/{id}', [SiswaController::class, 'destroy']);

    Route::get('/kartu', [KartuPelajarController::class, 'index']);
    Route::get('/kartu/add', [KartuPelajarController::class, 'create']);
    Route::post('/kartu/add', [KartuPelajarController::class, 'store']);
    Route::delete('/kartu/delete/{id}', [KartuPelajarController::class, 'destroy']);
});

require __DIR__ . '/auth.php';
