<x-header></x-header>
<h1>Page accueil</h1>

//afficher liste des produits

<div class="container">
    <div class="row">
        @foreach ($produits as $produit)
        <div class="col-lg-4">
            <div class="card">
                <img src="{{ $produit->image ?? '' }}" class="card-img-top" alt="{{ $produit->nom }}">
                <div class="card-body">
                    <h5 class="card-title -bottom-16">{{ $produit->nom ?? '' }}</h5>
                    <p class="card-text">{{ $produit->description ?? '' }}</p>
                    <p class="card-text">{{ $produit->prix ?? 0 }} €</p>
                    <p class="card-text">{{ $produit->stock ?? 0 }} en stock</p>
                    <form action="{{ route('panier.ajouter', ['produit' => $produit->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>