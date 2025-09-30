<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dental', [HomeController::class, 'dental'])->name('detal');
Route::get('/eye-care', [HomeController::class, 'eyecare'])->name('eye-care');

