<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Lugx Gaming Shop HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="assets/images/logo.png" alt="" style="width: 158px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{url('/')}}" class="active">Accueil</a></li>
                            <li><a href="{{url('/produits')}}">Nos Produits</a></li>
                            @if(!Auth::check())
                            <li><a href="{{url('/login')}} ">Log In</a></li>
                            <li><a href="{{url('/register')}} ">Sign In</a></li>
                            @endif

                            <li>
                                <a href="{{ route('panier.afficher') }}">
                                    <i class="fa fa-shopping-bag"></i> Cart
                                    <span class="badge bg-secondary">
                                        {{
                                        Auth::check()
                                        ? (\App\Models\Panier::where('user_id', Auth::id())->first() ? \App\Models\Panier::where('user_id', Auth::id())->first()->details->sum('qte_com') : 0)
                                        : (\App\Models\Panier::find(Session::get('panier_id')) ? \App\Models\Panier::find(Session::get('panier_id'))->details->sum('qte_com') : 0)
                                    }}

                                    </span>
                                </a>



                            </li>

                        </ul>
                        @if (Auth::check())
                        <ul class="nav">

                            <li>

                                <a href="{{route('profile')}}">
                                    {{ auth()->user()->name }} <i class="fa fa-user"></i>
                                </a>
                            </li>

                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="#" onclick="this.closest('form').submit()">{{ __('Log Out') }}</a>
                                </form>

                            </li>




                        </ul>
                        @endif

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="caption header-text">
                        <h6>Welcome to Spiderworks Gaming</h6>
                        <h2>BEST GAMING SITE EVER!</h2>
                        <p> est une plateforme de commerce électronique dédiée aux
                            passionnés de jeux. Elle propose une large gamme de produits liés aux jeux, tels que des
                            consoles de jeux, des jeux vidéo, des accessoires de jeux et des marchandises de jeux. Le
                            site est conçu pour offrir une expérience d’achat en ligne fluide et agréable, avec une
                            navigation facile, des descriptions de produits détaillées et des options de paiement
                            sécurisées. Que vous soyez un joueur occasionnel ou un joueur professionnel, “Spiderworks
                            Gaming - Shop Page” est votre destination ultime pour tous vos besoins en matière de jeux.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="right-image">
                        <img src="assets/images/banner-image.jpg" alt="">
                        <span class="price">$22</span>
                        <span class="offer">-40%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>Free Storage</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>User More</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-03.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>Reply Ready</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>Easy Layout</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>Trending</h6>
                        <h2>Trending Games</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="shop.html">View All</a>
                    </div>
                </div>
                @foreach ($produits as $produit)
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="{{url('/details_produit',$produit->id)}}"><img
                                    src="{{'assets/images/'.$produit->image}}" alt=""></a>
                            <span class="price">{{$produit->prix}} €</span>
                        </div>
                        <div class="down-content">
                            <h4>{{$produit->nom}}</h4>
                            <a href="{{url('/details_produit',$produit->id)}}"><i class="fa fa-shopping-bag"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>






    <div class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="shop">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h6>Our Shop</h6>
                                    <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
                                </div>
                                <p>Lorem ipsum dolor consectetur adipiscing, sed do eiusmod tempor incididunt.</p>
                                <div class="main-button">
                                    <a href="{{url('/produits')}}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 align-self-end">
                    <div class="subscribe">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h6>NEWSLETTER</h6>
                                    <h2>Get Up To $100 Off Just Buy <em>Subscribe</em> Newsletter!</h2>
                                </div>
                                <div class="search-input">
                                    <form id="subscribe" action="#">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Your email...">
                                        <button type="submit">Subscribe Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © Spiderworks &nbsp;&nbsp;</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <sc ript src="assets/js/isotope.min.js"></sc>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>