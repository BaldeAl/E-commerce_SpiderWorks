<x-layout></x-layout>
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Your Card</h3>
                <span class="breadcrumb"><a href="#">Home</a> > Our Shop</span>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-body">
    @if($panier && $panier->details->count() > 0)
    <ul class="list-group mb-4">
        @foreach($panier->details as $detail)
        <li class="list-group-item d-flex justify-content-between align-items-center card">
            <a href="{{url('/details_produit',$detail->produit->id)}}"><img
                    src="{{'assets/images/'.$detail->produit->image}}" alt=""></a>
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
<section class="h-100 gradient-custom">
    <div class="container py-5">
        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Cart - 2 items</h5>
                    </div>

                    <div class="card-body">
                        @foreach($panier->details as $detail)
                        <!-- Single item -->
                        <div class="row">
                            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                <!-- Image -->
                                <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                    data-mdb-ripple-color="light">
                                    <img src="{{'assets/images/'.$detail->produit->image}}" alt="" class="w-100" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                    </a>
                                </div>
                                <!-- Image -->
                            </div>

                            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                <!-- Data -->
                                <p><strong>{{ $detail->produit->nom }}</strong></p>
                                <p>{{ $detail->produit->description }}</p>

                                <form action="{{ route('panier.details.destroy', $detail->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary btn-sm me-1 mb-2" data-mdb-tooltip-init
                                        title="Remove item">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>



                                <!-- Data -->
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                <!-- Quantity -->
                                <form action="{{ route('panier.details.update', $detail->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <div class="d-flex mb-4 space-x-2" style="max-width: 300px">
                                        <div data-mdb-input-init class="form-outline m-2">
                                            <input type="number" class="form-control" name="qte_com"
                                                value="{{ $detail->qte_com }}" min="1" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-sm"><i
                                                class="fas fa-heart"></i></button>
                                    </div>

                                </form>


                                <!-- Price -->
                                <p class="text-start text-md-center">
                                    <strong>{{ $detail->produit->prix }} €</strong>
                                </p>
                                <!-- Price -->
                            </div>
                        </div>
                        <!-- Single item -->

                        <hr class="my-4" />
                        @endforeach

                        <!-- Single item -->
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <p><strong>Expected shipping delivery</strong></p>
                        <p class="mb-0">12.10.2020 - 14.10.2020</p>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body">
                        <p><strong>We accept</strong></p>
                        <img class="me-2" width="45px"
                            src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                            alt="Visa" />
                        <img class="me-2" width="45px"
                            src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                            alt="American Express" />
                        <img class="me-2" width="45px"
                            src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                            alt="Mastercard" />
                        <img class="me-2" width="45px"
                            src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
                            alt="PayPal acceptance mark" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Summary</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Products
                                <span>{{ $panier->montant }} €</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Shipping
                                <span>Gratis</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>Total amount</strong>
                                    <strong>
                                        <p class="mb-0">(including VAT)</p>
                                    </strong>
                                </div>
                                <span><strong>{{ $panier->montant }} €</strong></span>
                            </li>
                        </ul>

                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-primary btn-lg btn-block">
                            Go to checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<x-footer></x-footer>