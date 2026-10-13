<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Latihan 1: Profil mahasiswa
Route::get('/profil', [MahasiswaController::class, 'profil'])
    ->name('mahasiswa.profil');

// Latihan 2: Daftar mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'daftar'])
    ->name('mahasiswa.daftar');

// Latihan 3: Detail mahasiswa
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail'])
    ->name('mahasiswa.detail');