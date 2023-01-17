<?php

    /*
    Nama : Muhammad Rifqi Lutfi
    NIM  : 2440040412
    */
    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('daftar', [App\Http\Controllers\RegisterController::class, 'index'])->name('daftar');