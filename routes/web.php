<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomepageController;
use App\Http\Controllers\FrontendController\LoginpageController;
use App\Http\Controllers\FrontendController\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/login', [LoginpageController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');