<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- TODO remplir meta description --}}
    <meta name="description" content="Ouvert du jeudi au dimanche Le Coota est un
        café concert qui organise environs 120 concerts par an. C’est aussi comme tout bistrot, un lieu d’échanges et de
        rencontres, un lieu d’écoute et de respect, un lieu d’humour et de découverte" lang="fr">
    <meta name="keywords"
        content="Bar, café, concert, zone, convivialité, coktail, ambiance, music, salsa, Bretagne, Erdeven, Etel, Auray, Lorient, 56, 56410">
    <meta name="language" content="fr">
    <meta name="robots" content="index, follow">
    <meta name="distribution" content="global">
    <meta name="author" content="williams KUBIAK">
    <meta name="copyright" content="Le Coota">
    <meta name="abstract"
        content="Ce site presente le bar Le COOTA, les activités qu'il propose et les concerts à venir">
    <title>Le Coota - café/concert et zone de convivialité -</title>
    <link rel="canonical" href="https://www.Le-coota.fr/" />
    <meta property="og:title" content="Le COOTA bar/concert" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:site_name" content="lecoota.fr" />
    <meta property="og:url" content="https://lecoota.fr/" />
    <meta property="og:description" content="Bar, café/concert et zone de convivialitée à Erdeven">
    <meta property="og:image" content="{{asset('images/logo-coota.png')}}" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "https://lecoota.fr.fr/",
            "name": "le Coota", 
            "sameAs": [
                "https://www.youtube.com/channel/UCRtbkpKflCOHTEIV_8NBFgw",
                "https://www.flickr.com/photos/lecoota",
                "https://www.facebook.com/Le-Coota-215139838515726/",
            ],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": " ZAC de Kerhillio,Erdeven",
                "postalCode": "56410",
                "addressCountry": "FR"
            },
           
        }
    </script>
</head>
    

            {{-- in your blade template --}}
            @include('cookieConsent::index')
<body>

    <div id="app">
        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm main-menu fixed-top">
            <div class="container-fluid " id="bandeau" style="width:100%;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span>LE COOTA</span>
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
                            <a href="https://www.facebook.com/Le-Coota-215139838515726/" title="facebook"  target="_blank"rel="noopener noreferrer" class="fa fa-facebook"></a>
                        </li>
                        <li class="nav-item col-1">
                            <a href="https://www.flickr.com/photos/lecoota" title="flirck" target="_blank"rel="noopener noreferrer" class="fa fa-flickr"></a>
                        </li>
                        <li class="nav-item col-1">
                            <a href="https://www.youtube.com/channel/UCRtbkpKflCOHTEIV_8NBFgw" title="youtube" target="_blank" rel="noopener noreferrer"
                                class="fa fa-youtube"></a>
                        </li>

                    </ul>
                    <ul class="menu navbar-nav ml-auto">
                        @guest
                        <li>
                            <a title="accueil"href="{{route('accueil.index')}}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a tilte="concert" class="" href="{{route('concert.index')}}">Concerts</a>
                        </li>
                        <li class="nav-item">
                            <a title="archives" href="{{route('archives.index')}}">Archives</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('register')}}">register</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a title="accueil" href="{{route('accueil.index')}}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a title="concert" href="{{route('concert.index')}}">Concerts</a>
                        </li>
                        <li class="nav-item">
                            <a title="archives" href="{{route('archives.index')}}">Archives</a>
                        </li>
                        <li class="nav-item">
                            <a title="dashboard" href="{{route('dashboard.index')}}">Dashboard</a>
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