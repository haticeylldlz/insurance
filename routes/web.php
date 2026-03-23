<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return redirect()->route('owners.index');
});

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CarController;

Route::middleware('auth')->group(function () {
    Route::resource('owners', OwnerController::class);
    Route::resource('cars', CarController::class);
});
