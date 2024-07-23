<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

require __DIR__.'/auth.php';

// Assurez-vous que cette ligne est bien en place pour la route vers HomeController

Route::get('/home', [HomeController::class, 'index'])->name('home');
