<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitsController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// notes paraRoute::view('accueil', './views/accueil')->name('accueil');

Route::get('/accueil', function () {
    return view('components.accueil');
});

require __DIR__.'/auth.php';