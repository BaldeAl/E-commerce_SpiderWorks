<x-layout> </x-layout>

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>{{$produit->nom}}</h3>
                <span class="breadcrumb"><a href="{{url('/produits')}}">Acceuil</a> > <a href="#">Shop</a> > {{$produit->nom}}</span>
            </div>
        </div>
    </div>
</div>

<div class="single-product section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-image">
                    <img src="{{url('assets/images/'.$produit->image)}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <h4>{{$produit->nom}}</h4>
                <span class="price">{{$produit->prix}}</span>
                <form id="qty" action="#">
                    <input type="qty" class="form-control" id="1" aria-describedby="quantity" placeholder="1">
                    <button type="submit"><i class="fa fa-shopping-bag"></i> ADD TO CART</button>
                </form>
                <ul>
                    <li><span>Game ID:</span> {{$produit->id}}</li>
                    <li><span>Genre:</span> <a href="#">Action</a>, <a href="#">Team</a>, <a href="#">Single</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="sep"></div>
            </div>
        </div>
    </div>
</div>

<div class="more-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-content">
                    <div class="row">
                        <div class="nav-wrapper ">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <p>{{$produit->description}}.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer></x-footer>