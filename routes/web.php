<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomepageController;
use App\Http\Controllers\FrontendController\LoginpageController;
use App\Http\Controllers\FrontendController\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomepageController::class, 'index'])->name('homepage');

// Login
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginpageController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginpageController::class, 'login']);
Route::post('/logout', [LoginpageController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('frontend.dashboardpage.dashboard');
})->middleware('auth')->name('dashboard');
// Route::get('/login', [LoginpageController::class, 'login'])->name('login');
// Route::get('/register', [RegisterController::class, 'register'])->name('register');