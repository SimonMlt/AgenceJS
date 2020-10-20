<nav class="navbar navbar-expand-lg navbar-light bg-transparent sticky-top">
    <img src="../../storage/img/logo.png" width=100 class="navbar-brand" href="#">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('habitation')}}">Annonces</a>
            </li>
            @if(Auth::check() && Auth::user()->role == 'Admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('adminReservation')}}">Liste des réservations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('users')}}">Utilisateurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('categories')}}">Catégories</a>
                </li>
            @endif
        </ul>
        {{--      <form class="form-inline my-2 my-lg-0">--}}
        {{--        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
        {{--        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
        {{--      </form>--}}
    </div>
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->nom}} {{ Auth::user()->prenom }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Déconnexion') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>

