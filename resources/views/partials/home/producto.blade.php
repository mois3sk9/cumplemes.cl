

<div class="producto">


	<!--  <img src="{{ asset('images/dados.jpg') }}" alt="Producto" width="100%" height="300px" class="img-responsive">
-->

<ul class="rslides">
  <li><img title="titulo" src="{{ asset('images/dados.jpg') }}" /></li>
  <li><img src="{{ asset('images/dados.jpg') }}" /></li>
  <li><img src="{{ asset('images/valentine.jpg') }}" /></li>
  <li><img src="{{ asset('images/corazon.jpg') }}" /></li>
</ul>







	<div class="footer_producto">
		<div class="col-md-12"><h3>{{$producto->nombre}}</h3></div>
		<div class="col-md-12">

		<hr />
		<h5>
			{{ $producto->descripcion }}
		</h5>
		<div class="col-md-6-offset col-md-6 ">
			<hr />
		</div>
		<span class="precio center">${{ number_format($producto->precio) }}</span>
		</div>
		<div>

		<button  id="{{ $producto->id }}" type="button"  data-target="#myModal" data-toggle="modal" class="btn btn-primary pull-right right-5 productoCarro" data-toggle="tooltip" data-placement="bottom" title="Agregar al carro">
				<span  class="glyphicon glyphicon-shopping-cart"  aria-hidden="true"></span>
		</button>


		</div>

	</div>

</div>
