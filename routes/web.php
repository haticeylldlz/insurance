<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CarController;

Auth::routes();

// Ana sayfa
Route::get('/', function () {
    return redirect()->route('owners.index');
});

// Auth gerekli
Route::middleware('auth')->group(function () {

    // Herkes görebilir (index & show)
    Route::resource('owners', OwnerController::class)->only(['index', 'show']);
    Route::resource('cars', CarController::class)->only(['index', 'show']);

    // SADECE ADMIN
    Route::middleware('admin')->group(function () {

        Route::resource('owners', OwnerController::class)->except(['index', 'show']);
        Route::resource('cars', CarController::class)->except(['index', 'show']);

    });

});
