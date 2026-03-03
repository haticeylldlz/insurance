<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('owners', OwnerController::class);
