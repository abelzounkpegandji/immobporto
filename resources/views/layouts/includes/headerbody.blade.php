<!-- ======= Header body ======= -->


<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">immobPorto</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        <!--   <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>-->
          <li><a class="nav-link scrollto" href="/Location">Location</a></li>
          <li><a class="nav-link scrollto" href="/Achat">Achat</a></li>
          <li><a class="nav-link scrollto" href="/Publication">Publication</a></li>
   <!--
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
      
-->       

       @if(Route::has('login'))
            @auth
                  @if(Auth::user()->utype === 'ADM')
                    <li class = "dropdown">
                      <a title = "Mon profile" href = "#" >Profil ({{Auth::user()->name}}) <i class = "fa fa-angle-down" aria-hidden = "true"></i></a>
                        <ul class = "submenu curency">
                          <li classe="menu-item" >
                                <a title="immobporto" href="{{route('admin.dashboard')}}">Espace Administrateur</a>
                          </li>
                            <li classe="menu-item">
                              <a title="Categories" href="{{route('admin.categories')}}">Categories</a>
                            </li>
                          <li classe="menu-item" >
                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                              </li>
                          <form id="logout-form" method="POST" action="{{route('logout')}}">
                            @csrf
                          </form>
                        </ul>
                    </li>
                  @else
                    <li class = "dropdown">
                        <a title = "Mon profile" href = "#" > Profil ({{Auth::user()->name}}) <i class = "fa fa-angle-down" aria-hidden = "true"></i></a>
                          <ul class = "submenu curency">
                            <li classe="menu-item" >
                                  <a title="immobporto" href="{{route('user.dashboard')}}">Espace client ou utilisateur</a>
                              </li>
                              <li classe="menu-item" >
                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                              </li>
                          <form id="logout-form" method="POST" action="{{route('logout')}}">
                            @csrf
                          </form>
                              
                          </ul>
                      </li>
                  @endif
            @else
              <li><a class="getstarted scrollto" href="{{route('login')}}">Login</a></li>
              <li><a class="getstarted scrollto" href="{{route('register')}}">S'inscrire</a></li>
            @endif
        @endif
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- fin  -->
 