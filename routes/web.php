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

// Route::view('accueil', './views/accueil')->name('accueil');
// Route::get('/produits', [ProduitsController::class, 'listeProduits'])->name('produits');

Route::get('/accueil', function () {
    return view('components.accueil');
});

require __DIR__.'/auth.php';
