<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login',[App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/postlogin',[App\Http\Controllers\AuthController::class, 'postlogin']);
Route::get('/logout',[App\Http\Controllers\AuthController::class, 'logout']);


Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/siswa',[App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
    Route::get('/siswa/create',[App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/siswa',[App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
    Route::get('/siswa/{id}/edit',[App\Http\Controllers\SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/siswa/{id}',[App\Http\Controllers\SiswaController::class,'update'])->name('siswa.update');

});


//Route::get('/siswa/{id}',[App\Http\Controllers\SiswaController::class,'show'])->name('siswa.show');