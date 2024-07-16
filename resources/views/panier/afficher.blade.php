<x-header></x-header>
<h1>Votre Panier</h1>
<div class="panel panel-body">
    @if($panier && $panier->details->count() > 0)
    <ul class="list-group mb-4">
        @foreach($panier->details as $detail)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $detail->produit->nom }} - {{ $detail->produit->prix }}€ x {{ $detail->qte_com }} <div>
                <form action="{{ route('panier.details.update', $detail->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PUT')
                    <input type="number" name="qte_com" value="{{ $detail->qte_com }}" min="1" required>
                    <button type="submit" class="btn btn-primary btn-sm">Mettre à jour</button>
                </form>
                <form action="{{ route('panier.details.destroy', $detail->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
    <p><strong>Montant total: {{ $panier->montant }}€</strong></p>
    @else
    <p class="label label-danger">Votre panier est vide.</p>
    @endif
</div>