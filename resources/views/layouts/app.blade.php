<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-white shadow-sm main-menu fixed-top">
            <div class="container-fluid " id="bandeau">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h1>LE COOTA</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="reseau navbar-nav ml-auto">
                        <li><a href="https://www.facebook.com/Le-Coota-215139838515726/" class="fa fa-facebook"></a>
                        </li>
                        <li><a href="https://www.flickr.com/photos/lecoota" class="fa fa-flickr"></a></li>
                        <li><a href="https://www.youtube.com/channel/UCRtbkpKflCOHTEIV_8NBFgw"
                                class="fa fa-youtube"></a></li>
                        <li><a href="https://www.tripadvisor.fr/Attraction_Review-g675634-d4922301-Reviews-Le_Coota-Erdeven_Morbihan_Brittany.html"
                                class="fa fa-tripadvisor"></a></li>
                    </ul>
                    <ul class="menu navbar-nav ml-auto">
                        <li><a href="">Accueil</a></li>
                        <li><a href="">Les Evenements</a></li>
                        <li><a href="">Les Médias</a></li>
                    <li><a href="{{route('register')}}">register</a></li>
                    <li><a href="{{route('event.create')}}">dashboard</a></li>
                    </ul>
                    <div class="flex-center position-ref full-height">
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                            <a href="{{ url('/home') }}">Home</a>
                            @else
                            <a href="{{ route('login') }}">Login</a>

                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4" style="padding: 0!important">
            @yield('content')
        </main>
            <footer>
    @extends('layouts/footer')
</footer>
    </div>
</body>
<script src={{asset('js/script.js')}} defer></script>

</html>