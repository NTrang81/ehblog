<?php

use Illuminate\Support\Facades\Route;

/*
 * Publieke sectie website
 */
Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

/*
 * User die ingelogd is sectie
 */


/*
 * Admin sectie
 */



/*
 * Dingen hieronder bekijken we later
 */
Route::middleware(['auth', 'verified'])->group(function () {
Route::view('dashboard', 'dashboard')->name('dashboard');
});

