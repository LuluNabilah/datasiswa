<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa',[App\Http\Controllers\SiswaController::class, 'index']);
Route::get('/siswa/create',[App\Http\Controllers\SiswaController::class, 'create']);
Route::get('/siswa/{id}/edit',[App\Http\Controllers\SiswaController::class, 'edit']);