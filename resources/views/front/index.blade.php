@extends('front.layouts.app')
@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide container" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="img/foto-welcome1.jpg" class="d-block w-100" alt="Primera foto del carousel">
          </div>
          <div class="carousel-item">
            <img src="img/foto-welcome2.jpg" class="d-block w-100" alt="Segunda foto del carousel">
          </div>
          <div class="carousel-item">
            <img src="img/foto-welcome3.jpg" class="d-block w-100" alt="Tercera foto del carousel">
          </div>
        </div>
    </div>

    <h2 class="text-center my-4">Productos Destacados</h2>
        <div class="row justify-content-between container mx-auto">

        <div class="product-card col-3">
            <div class="product-header">
                <img src="img/foto-welcome1.jpg" alt="imagen del producto destacado 1">
            </div><!--product-header-->
            <div class="product-content">
                <div class="product-content-header">
                    <a href="#">
                        <h3 class="product-title">Alfajor 1</h3>
                    </a>
                </div>

                <div class="product-info">
                    <div class="info-section">
                        <label>Precio</label>
                        <span>$100</span>
                    </div><!--date,time-->
                    <div class="info-section">
                        <label>Categoria</label>
                        <span>Alfajores</span>
                    </div><!--screen-->
                    <div class="info-section">
                        <label>Precio</label>
                        <span>$100</span>
                    </div><!--date,time-->
                </div>
            </div><!--product-content-->
        </div><!--product-card-->

        <div class="product-card col-3">
            <div class="product-header">
                <img src="img/foto-welcome2.jpg" alt="imagen del producto destacado 1">
            </div><!--product-header-->
            <div class="product-content">
                <div class="product-content-header">
                    <a href="#">
                        <h3 class="product-title">Alfajor 2</h3>
                    </a>
                </div>

                <div class="product-info">
                    <div class="info-section">
                        <label>Precio</label>
                        <span>$100</span>
                    </div><!--date,time-->
                    <div class="info-section">
                        <label>Categoria</label>
                        <span>Alfajores</span>
                    </div><!--screen-->
                    <div class="info-section">
                        <label>Precio</label>
                        <span>$100</span>
                    </div><!--date,time-->
                </div>
            </div><!--product-content-->
        </div><!--product-card-->

        <div class="product-card col-3">
            <div class="product-header">
                <img src="img/foto-welcome3.jpg" alt="imagen del producto destacado 1">
            </div><!--product-header-->
            <div class="product-content">
                <div class="product-content-header">
                    <a href="#">
                        <h3 class="product-title">Alfajor 3</h3>
                    </a>
                </div>

                <div class="product-info">
                    <div class="info-section">
                        <label>Precio</label>
                        <span>$100</span>
                    </div><!--date,time-->
                    <div class="info-section">
                        <label>Categoria</label>
                        <span>Alfajores</span>
                    </div><!--screen-->
                    <div class="info-section">
                        <label>Precio</label>
                        <span>$100</span>
                    </div><!--date,time-->
                </div>
            </div><!--product-content-->
        </div><!--product-card-->

    </div>
@endsection