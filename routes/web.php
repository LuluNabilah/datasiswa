<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login',[App\Http\Controllers\AuthController::class, 'login']);
Route::post('/postlogin',[App\Http\Controllers\AuthController::class, 'postlogin']);

Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/siswa',[App\Http\Controllers\SiswaController::class, 'index']);
Route::get('/siswa/create',[App\Http\Controllers\SiswaController::class, 'create']);
Route::get('/siswa/{id}/edit',[App\Http\Controllers\SiswaController::class, 'edit']);