<?php

use Illuminate\Support\Facades\Route;

/*
 * Public routes
 */
Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

/*
 * User routes
 */


/*
 * Admin routes
 */