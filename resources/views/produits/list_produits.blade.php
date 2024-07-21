<x-layout></x-layout>
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Our Shop</h3>
        <span class="breadcrumb"><a href="#">Home</a> > Our Shop</span>
      </div>
    </div>
  </div>
</div>

<div class="section trending">
  <div class="container">
    <ul class="trending-filter">
      <li>
        <a class="is_active" href="#!">ALL Games</a>
      </li>
    </ul>
    <div class="row trending-box">
      @foreach ($produits as $produit)
      <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
        <div class="item">
          <div class="thumb">
            <a href="{{url('/details_produit',$produit->id)}}"><img src="{{'assets/images/'.$produit->image}}" alt=""></a>
            <span class="price">{{$produit->prix}}</span>
          </div>
          <div class="down-content">
            <span class="category">{{$produit->description}}</span>
            <h4>{{$produit->nom}}</h4>
            <a href="{{url('/details_produit',$produit->id)}}"><i class="fa fa-shopping-bag"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="pagination">
          <li><a href="#"> &lt; </a></li>
          <li><a href="#">1</a></li>
          <li><a class="is_active" href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#"> &gt; </a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<x-footer></x-footer>