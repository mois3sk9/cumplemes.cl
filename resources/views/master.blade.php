<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cumple mes!</title>
    @section('fuentes')
    <link href='https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Quicksand' rel='stylesheet' type='text/css'>
    @show

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boostrap-cumple-mes-style.css') }}" />
    <!--<link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css') }}" />-->
    <link rel="stylesheet" href="{{ asset('css/responsiveslides.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
    

  </head>
  <body>

      {{-- Barra de navegacion --}}
      @section('nav')
      @include('partials.master_partials.nav')
      @show
      {{--Contenido dinamico--}}
      <section class="contenido">
        @yield('contenido')
      </section>


        <section id="footer" class="top10">
          <div class="container">
          {{-- footer de la plicacion --}}
          @include('partials.master_partials.footer')
          </div>
        </section>

  </body>

  @section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{ asset('js/configuracionCsfr.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-config.js') }}"></script>
  <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="{{ asset('js/carrito.compra.js') }}"></script>
  <script src="{{ asset('js/configuracionToastr.js') }}"></script>
  <script src="{{ asset('js/home.productos.js') }}"></script>
  <!--<script src="{{ asset('js') }}"></script>-->
  @show
</html>
