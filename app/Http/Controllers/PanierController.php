<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\DetailPanier;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PanierController extends Controller
{
    public function ajouterAuPanier(Request $request, Produit $produit)
    {
        // Vérifie si l'utilisateur est authentifié
        if (Auth::check()) {
            $panier = Panier::where('user_id', Auth::id())->firstOrCreate([
                'user_id' => Auth::id(),
                'montant' => 0
            ]);
        } else {
            $panierId = Session::get('panier_id');
            if ($panierId) {
                $panier = Panier::find($panierId);
            } else {
                $panier = Panier::create(['montant' => 0]);
                Session::put('panier_id', $panier->id);
            }
        }

        $detail = $panier->details()->updateOrCreate(
            ['produit_id' => $produit->id],
            ['qte_com' => 1]
        );

        $panier->montant += $produit->prix * $request->qte_com;
        $panier->save();

        return redirect()->route('produits.get')->with('success', 'Produit ajouté au panier');
    }

    public function afficherPanier()
    {
        if (Auth::check()) {
            $panier = Panier::where('user_id', Auth::id())->first();
        } else {
            $panierId = Session::get('panier_id');
            $panier = $panierId ? Panier::find($panierId) : null;
        }

        return view('panier.afficher', compact('panier'));
    }

    public function mettreAJourDetailPanier(Request $request, DetailPanier $detail)
    {
        $request->validate([
            'qte_com' => 'required|integer',
        ]);

        $detail->update(['qte_com' => $request->qte_com]);
        $panier = $detail->panier;
        $this->recalculerMontantPanier($panier);

        return redirect()->route('panier.afficher');
    }

    public function supprimerDetailPanier(DetailPanier $detail)
    {
        $panier = $detail->panier;
        $detail->delete();
        $this->recalculerMontantPanier($panier);

        return redirect()->route('panier.afficher');
    }

    private function recalculerMontantPanier(Panier $panier)
    {
        $montant = 0;
        foreach ($panier->details as $detail) {
            $montant += $detail->produit->prix * $detail->qte_com;
        }
        $panier->update(['montant' => $montant]);
    }
}