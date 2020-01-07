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
        <div class="container-fluid ">
            <div class=" ">
                <aside class="col-12">
                    <nav class="nav navbar navbar-expand navbar-dark">
                        <div class="collapse navbar-collapse" id=""> 
                            <a class="navbar-brand" href="{{ url('/') }}">
                                        <h1>LE COOTA</h1>
                            </a>
                            <ul class="menu flex-row navbar-nav w-100">
                                
                                <li class="nav-item"><a class="nav-link pl-0"
                                        href="{{route('accueil.index')}}">Accueil</a></li>
                                <li class="nav-item"><a class="nav-link pl-0"
                                        href="{{route('dashboard.index')}}">dashboard</a></li>
                               
                            </ul>
                        </div>
                    </nav>
                </aside>
                <main class="py-4 " style="padding: 0!important">
                    @yield('content')
                </main>
            </div>
        </div>
        <footer>
            @include('layouts/footer')
        </footer>
    </div>
</body>
<script src={{asset('js/script.js')}} defer></script>
</html>