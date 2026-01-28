<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/booking', [FrontendController::class, 'booking'])->name('booking');
Route::get('/booking/success', [FrontendController::class, 'bookingSuccess'])->name('booking.success');
