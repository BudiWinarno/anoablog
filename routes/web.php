<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomepageController;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomepageController::class, 'index'])->name('homepage');