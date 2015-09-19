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
  </head>
  <body>
      
      {{-- Barra de navegacion --}}
      @include('partials.master_partials.nav')
      
      {{--Contenido dinamico--}}
      <section class="contenido">
        @yield('contenido')
      </section>
      
      
        <section id="footer" class="top10">
          <div class="container">
          @include('partials.master_partials.footer')
          </div>
        </section>

  </body>

  @section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  @show
</html>
