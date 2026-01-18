<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'home'])->name('home_page');
// Route::group(['as' => 'f.'], function () {
//     Route::get('/', [HomeController::class, 'home'])->name('home');
// });
