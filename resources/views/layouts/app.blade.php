<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- TODO remplir meta description --}}
    <meta name="description" content="Bar,café concert,zone de convivialité" lang="fr">
    <meta name="keywords"
        content="Bar,café concert,zone de convivialité,ouvert 7/7,Bretagne,Erdeven,Etel,Auray,Lorient,56,56410">
    <meta name="language" content="fr">
    <meta name="robots" content="index, follow">
    <meta name="distribution" content="global">
    <meta name="author" content="williams KUBIAK">
    <meta name="copyright" content="Le Coota">
    <meta name="abstract"
        content="Ce site presente le bar Le COOTA, les activités qu'il propose et les concerts à venir">
    <title>Le Coota -café/concert et zone de convivialité-</title>
    <link rel="canonical" href="https://www.Le-coota.fr/" />
    <meta property="og:title" content="Le COOTA bar/concert" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:site_name" content="lecoota.fr" />
    <meta property="og:url" content="https://lecoota.fr/" />
    <meta property="og:description" content="Bar, café/concert et zone de convivialitée à Erdeven">
    {{-- <meta property="og:image" content="" /> --}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    

            {{-- in your blade template --}}
            @include('cookieConsent::index')
<body>

    <div id="app">
        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm main-menu fixed-top">
            <div class="container-fluid " id="bandeau" style="width:100%;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h1>LE COOTA</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style='background-color:white;'>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="reseau  flex-row navbar-nav ml-auto">
                        <li class="nav-item col-1">
                            <a href="https://www.facebook.com/Le-Coota-215139838515726/"  target="_blank" class="fa fa-facebook"></a>
                        </li>
                        <li class="nav-item col-1">
                            <a href="https://www.flickr.com/photos/lecoota" target="_blank" class="fa fa-flickr"></a>
                        </li>
                        <li class="nav-item col-1">
                            <a href="https://www.youtube.com/channel/UCRtbkpKflCOHTEIV_8NBFgw" target="_blank"
                                class="fa fa-youtube"></a>
                        </li>

                    </ul>
                    <ul class="menu navbar-nav ml-auto">
                        @guest
                        <li>
                            <a href="{{route('accueil.index')}}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="" href="{{route('concert.index')}}">Les Concerts</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('archives.index')}}">Les Archives</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('register')}}">register</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{route('accueil.index')}}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="" href="{{route('concert.index')}}">Les Concerts</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('archives.index')}}">Les Archives</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard.index')}}">dashboard</a>
                        </li>
                        @endguest
                    </ul>
                    <div class="flex-center position-ref full-height">
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                            <a class="nav-link roue" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-cog"></i>
                            </a>
                            @else
                            <a class="roue" href="{{ route('login') }}"><i class="fa fa-cog"></i></a>
                            @endauth
                        </div>
                        @endif
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </nav>

        <main class="py-4" style="padding: 0!important">
            @yield('content')
        </main>


        <footer class="footer">
            @include('layouts/footer')
        </footer>
    </div>
</body>
<script src={{asset('js/script.js')}} defer></script>
<script src={{asset('js/jquery.viewportchecker.js')}} defer></script>
</html>