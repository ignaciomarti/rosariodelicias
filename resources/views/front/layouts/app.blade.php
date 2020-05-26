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
    <script src="{{ asset('js/app2.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/20ee0b6ed7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
      <header class="bg-white">
        <nav class="d-flex justify-content-between align-items-center container">
          <a href="#" class="px-3 py-5">Empresa</a>
          <a href="#" class="px-3 py-5">Productos</a>
          <a href="#" class="px-3 py-5">Categorías</a>
          <img src="img/logo.jpg" class="logo" alt="logo de Rosario Delicias">
          <a href="#" class="px-3 py-5">Redes</a>
          <a href="#" class="px-3 py-5">Contacto</a>
          <a href="#" class="px-3 py-5">Carrito</a>
        </nav>
      </header>

        <main class="py-4">
            @yield('content')
        </main>

    @include('front.layouts.footer')
</body>
</html>
