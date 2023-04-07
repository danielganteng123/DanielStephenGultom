<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('/admin/dashboard');
});


Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);
Route::view('/detail_mahasiswa', 'detail_mahasiswa');
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/katakata', [AdminController::class, 'katakata']);
Route::get('/admin/poems', [AdminController::class, 'poems']);
Route::get('/admin/fotoprewed', [AdminController::class, 'foto']);
Route::get('/admin/chart', [AdminController::class, 'show_chart']);
Route::get('/admin/aboutme', [AdminController::class, 'aboutme']);
