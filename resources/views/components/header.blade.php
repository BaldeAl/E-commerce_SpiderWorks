  <!-- ***** Header Area Start ***** -->

  <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
  </head>
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          <img src="{{url('assets/images/logo.png')}}" alt="" style="width: 158px;">

                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="{{url('/produits')}}">Accueil</a></li>
                          <li><a href="{{url('/produits')}}" class="active">Nos Produits</a></li>
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
                                  {{ auth()->user()->name }} {{ __('Profile') }}
                              </a>
                          </li>

                          <li>
                              <form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                  <button type="submit"><a>{{ __('Log Out') }}</a> </button>
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