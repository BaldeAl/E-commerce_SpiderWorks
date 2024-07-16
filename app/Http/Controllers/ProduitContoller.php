<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
//controller import
use App\Http\Controllers\Controller;

class ProduitContoller extends Controller
{
    
    public function listProduits(){

        $produits =Produit::all();
        return view('produits.list_produits',['produits'=>$produits]);
        
    }
        
}
