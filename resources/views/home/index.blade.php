
@extends('master')
@section('contenido')
<section id="imagen-principal">
	@include('partials.home.slider')
	<script>
	$('.carousel').carousel();
	</script>
 </section>
 	<section>
		<div class="container">
			 <div class="row top10">
			 	<div class="col-md-1 col-sm-0"></div>
			 	<div class="col-md-3 col-sm-6 top10">
			 		<img src="{{ asset('images/corazon.jpg') }}" class="img-responsive" alt="">
			 	</div>
			 	<div class="col-md-3 col-sm-6 top10">
			 		<img src="{{ asset('images/corazon.jpg') }}" class="img-responsive" alt="">
			 	</div>
			 	<div class="col-md-3 col-sm-6 top10">
			 		<img src="{{ asset('images/corazon.jpg') }}" class="img-responsive" alt="">
			 	</div>
			 
		 	</div>
	 	</div>

 	</section>

	 <div class="container">
		<div class="row top10">
				
				<div class="col-md-12">
				
				<div class="col-md-6"> <img src="{{ asset('images/jardin_japones.jpg' )}}" alt="" width="600px" height="480px" class="img-responsive centered">  </div>
				<div class="col-md-6">  <h1>Consejos!</h1> </div>
				<h3>
					Te ofrecemos los mejores consejos para que pases un cumplemes inolvidable!
				</h3>
			</div>
		</div>
		<div class="row top10">
			<div class="col-md-12">
				<div class="col-md-6">  
				<h1>No sabes donde llevar a tu pareja?</h1> 
				<h3>
						Mira los lugares más romanticos de santiago que harán que pases el mejor día de tu vida.
				</h3>

				</div>
				
				<div class="col-md-6"> <img src="{{ asset('images/jardin_japones.jpg' )}}" alt="" width="600px" height="480px" class="img-responsive centered">  </div>	
			</div>
		</div>
	</div>
 <section>
 	
 </section>

@stop