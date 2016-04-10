
@extends('master')
@section('javascript')
    @parent
<script>
  $('.carousel').carousel();
</script>
@stop
@section('contenido')



<section id="imagen-principal">
	@include('partials.home.slider')
 </section>
 	<section>
            
            <div class="container top10 owl-carousel owl-theme" id="owl-demo">
                <input type="hidden" name="csrf-token" value="{{ csrf_token() }}">
                    @each('partials.home.producto', $productos, 'producto')
            </div>

 	</section>

	 <div class="container">
            <div class="row top10 separador">

                <div class="col-md-12">

                    <div class="col-md-6"> <img src="{{ asset('images/jardin_japones.jpg' )}}" alt="" width="600px" height="480px" class="img-responsive centered img-rounded">  </div>
                    <div class="col-md-6">  <h1>Consejos!</h1> </div>
                    <h3>
                            Te ofrecemos los mejores consejos para que pases un cumplemes inolvidable!
                    </h3>
                </div>
            </div>
            <div class="row top10 separador">
                <div class="col-md-12">
                    <div class="col-md-6">
                    <h1>No sabes donde llevar a tu pareja?</h1>
                    <h3>
                                    Mira los lugares más romanticos de santiago que harán que pases el mejor día de tu vida.
                    </h3>

                    </div>

                    <div class="col-md-6"> <img src="{{ asset('images/picnic.jpg' )}}" alt="" width="600px" height="480px" class="img-responsive centered img-rounded">  </div>
                </div>
            </div>
	</div>
 <section>

 </section>

 @include('partials.utilidades.modal')

@stop
