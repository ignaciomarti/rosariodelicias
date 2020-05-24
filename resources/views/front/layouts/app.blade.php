<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rosario Delicias') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid" id="app">
        <nav class="container navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Rosario Delicias</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active mr-3">
                  <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item active mr-3">
                <a class="nav-link" href="/productos">Productos</a>
                </li>
                <li class="nav-item active mr-3">
                  <a class="nav-link" href="/nosotros">Nosotros</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/contacto">Contacto</a>
                </li>
              </ul>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('front.layouts.footer')
</body>
</html>
