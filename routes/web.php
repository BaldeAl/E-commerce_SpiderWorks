<?php

use App\Http\Controllers\ProduitContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanierController;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'welcome');



Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/produits');
})->name('logout');


Route::get('/accueil', function () {
    $produits = App\Models\Produit::all();
    return view('components.accueil', ['produits' => $produits]);
})->name('acceuil.test');

//panier routes
Route::post('/paniers/ajouter/{produit}', [PanierController::class, 'ajouterAuPanier'])->name('panier.ajouter');
Route::get('/paniers', [PanierController::class, 'afficherPanier'])->name('panier.afficher');
Route::put('/paniers/details/{detail}', [PanierController::class, 'mettreAJourDetailPanier'])->name('panier.details.update');
Route::delete('/paniers/details/{detail}', [PanierController::class, 'supprimerDetailPanier'])->name('panier.details.destroy');


Route::get('/produits', [ProduitContoller::class,'listProduits'])->name('produits.get');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/details_produit/{id}', [ProduitContoller::class,'detailsProduit'])->name('produits.details');

require __DIR__.'/auth.php';
