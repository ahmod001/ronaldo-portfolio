<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Page Routes
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'landingPage');
});

// API Routes
Route::controller(UserController::class)->group(function () {
    Route::get('/hero', 'getHeroData');
    Route::get('/about', 'getAboutData');
});