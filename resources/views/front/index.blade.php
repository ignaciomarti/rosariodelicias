@extends('front.layouts.app')
@section('content')

<!--Carousel Wrapper-->
<section>
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="img/foto-welcome1.jpg"
            alt="First slide">
            <div class="contenedor-titulos">
              <h1 class="welcomeTitle">Bienvenidos a Rosario Delicias</h1>
              <h3 class="welcome-title">Lorem ipsum dolor sit.</h3>
            </div>
          <div class="mask rgba-black-light"></div>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="img/foto-welcome2.jpg"
            alt="Second slide">
            <div class="contenedor-titulos">
              <h1>Los mejores alfajores del mundo</h1>
              <h3>Amet consectetur adipisicing elit..</h3>
            </div>
          <div class="mask rgba-black-strong"></div>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="img/foto-welcome3.jpg"
            alt="Third slide">
            <div class="contenedor-titulos">
              <h1>Y alrededores de este mundo</h1>
              <h3>Sit dolorum ad delectus?</h3>
            </div>
          <div class="mask rgba-black-slight"></div>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
</section>

<section class="container destacados">
  <h4 class="text-center mt-5 mb-2">Nuestros destacados</h4>
  <hr>
  <p class="text-center my-4"> Amamos lo que hacemos</p>
  <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-5">
      <div class="card">
        <img src="img/foto-welcome1.jpg" class="card-img-top" alt="Primer producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 1</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
    <div class="col mb-5">
      <div class="card">
        <img src="img/foto-welcome2.jpg" class="card-img-top" alt="Segundo producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 2</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
    <div class="col mb-5">
      <div class="card">
        <img src="img/foto-welcome3.jpg" class="card-img-top" alt="Tercer producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 3</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="img/foto-welcome3.jpg" class="card-img-top" alt="Cuarto producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 4</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="img/foto-welcome2.jpg" class="card-img-top" alt="Quinto producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 5</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="img/foto-welcome1.jpg" class="card-img-top" alt="Sexto producto destacado">
        <div class="contenedor-descripcion-destacados">
          <p class="text-center">Producto 6</p>
          <span class="text-center d-block">Alfajores</span>
        </div>
      </div>
    </div>
  </div>
  <button class="mx-auto d-block mt-5">Ver todos los productos</button>
</section>

<section class="testimoniales d-flex justify-content-between align-items-center my-5">
  <img src="img/panadero.jpg" alt="imagen de Florian Martí">
  <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, velit. adipisicing elit. Id, velit.</blockquote>
</section>

<section class="diferencia">
  <h4 class="text-center mt-5 mb-2">Lo que nos diferencia</h4>
  <hr>
  <p class="text-center my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit?</p>
</section>
@endsection