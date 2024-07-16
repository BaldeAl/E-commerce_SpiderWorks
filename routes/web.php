<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanierController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/accueil', function () {
    $produits = App\Models\Produit::all();
    return view('components.accueil', ['produits' => $produits]);
})->name('acceuil.test');

//panier routes
Route::post('/paniers/ajouter/{produit}', [PanierController::class, 'ajouterAuPanier'])->name('panier.ajouter');
Route::get('/paniers', [PanierController::class, 'afficherPanier'])->name('panier.afficher');
Route::put('/paniers/details/{detail}', [PanierController::class, 'mettreAJourDetailPanier'])->name('panier.details.update');
Route::delete('/paniers/details/{detail}', [PanierController::class, 'supprimerDetailPanier'])->name('panier.details.destroy');
require __DIR__.'/auth.php';