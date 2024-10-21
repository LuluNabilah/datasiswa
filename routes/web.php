<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa',[App\Http\Controllers\SiswaController::class, 'index']);
