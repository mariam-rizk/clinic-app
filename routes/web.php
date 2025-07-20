<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\website\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(AuthController::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'submitRegister')->name('submit.register');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'submitLogin')->name('submit.login');

});