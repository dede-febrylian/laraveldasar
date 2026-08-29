<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MapelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('siswa', SiswaController::class);
Route::resource('mapel',MapelController::class);