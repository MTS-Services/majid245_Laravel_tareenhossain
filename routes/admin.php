<?php

use App\Http\Controllers\Backend\Admin\ApplicationSettings\ApplicationSettingsController;
use App\Http\Controllers\Backend\Admin\UserManagement\AdminController;
use App\Http\Controllers\Backend\Admin\UserManagement\UserController;
use App\Http\Controllers\Backend\AirportPriceController;
use App\Http\Controllers\Backend\GalleryCategoryController;
use App\Http\Controllers\Backend\GalleryImageController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FaqController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:admin', 'admin', 'adminVerify'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::group(['as' => 'um.'], function () {

        Route::controller(AdminController::class)->name('admin.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/view/{id}', 'view')->name('view');
            Route::get('/trash', 'trash')->name('trash');
        });

        Route::controller(UserController::class)->name('user.')->prefix('user')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/view/{id}', 'view')->name('view');
            Route::get('/trash', 'trash')->name('trash');
            Route::get('/profile-info/{id}', 'profileInfo')->name('profileInfo');
            Route::get('/shop-info/{id}', 'shopInfo')->name('shopInfo');
            Route::get('/kyc-info/{id}', 'kycInfo')->name('kycInfo');
            Route::get('/statistic/{id}', 'statistic')->name('statistic');
            Route::get('/referral/{id}', 'referral')->name('referral');
        });
    });

    Route::group(['prefix' => 'application-settings', 'as' => 'as.'], function () {
        Route::controller(ApplicationSettingsController::class)->prefix('application-settings')->group(function () {
            Route::get('/general-settings', 'generalSettings')->name('general-settings');
            Route::get('/database-settings', 'databaseSettings')->name('database-settings');
            Route::get('/tik-tok-settings', 'tikTokSettings')->name('tik-tok-settings');
        });
    });

    Route::controller(AirportPriceController::class)->name('airport-price.')->prefix('airport-price')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/view/{id}', 'view')->name('view');
    });

    Route::controller(GalleryCategoryController::class)->name('gallery-category.')->prefix('gallery-category')->group( function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/view/{id}', 'view')->name('view');
    });
    // Then use it in your routes
    Route::controller(FaqController::class)->name('faq.')->prefix('faq')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/view/{id}', 'view')->name('view');
    });

    Route::controller(GalleryImageController::class)->name('gallery-image.')->prefix('gallery-image')->group( function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/view/{id}', 'view')->name('view');
    });
});
