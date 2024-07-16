<?php

use App\Http\Controllers\ProduitContoller;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

//controller route
Route::get('/produits', [ProduitContoller::class,'listProduits'])->name('produits.get');
