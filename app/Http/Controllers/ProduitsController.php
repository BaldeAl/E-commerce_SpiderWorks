<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Produits;

class ProduitsController extends Controller
{
    public function accueil(): View
    {
        return view('accueil');
    }
    // public function listeProduits(): View
    // {
        // $produits = ProduitsController::all();
        // return view('produits.liste', [
        //     'produits' => $produits,
        // ]);
        
    // }
}
