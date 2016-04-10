
@extends('master_contenido')
@section('contenido')
<input type="hidden" name="csrf-token" value="{{ csrf_token() }}">
<div class="container">
    <h1>{{ $producto->nombre }}</h1>
    <div class="row">
        <div class="col-md-4 cols-xs-12">
            <h6>{{ $producto->tipo->nombre}}</h6> |
            <h6>Codigo: {{ $producto->codigo }}<h6> |
            <h6>Fecha: {{ $producto->created_at }}<h6> 
        </div>
    </div>
    <hr>
    
    <div class="row">
        <div class="col-md-5 col-xs-12">
            <img src="{{ asset('images/dados.jpg') }}" width="500px" height="500px" class="img-rounded img-responsive"/>
        </div>
        <div class="col-md-5 col-xs-12">
            <div class=col-md-12""> 
                 <p>
                Lorem impsum
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div  class="col-md-12">
                <div class="pull-right pull-down">
                    
                    <button class="btn btn-info productoCarro" onclick="agregarAlCarro({{$producto->id}},'{{ route('carrito.store')}}')">
                        Agregar al carro
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                    </button>
                     <button class="btn btn-success">
                         Comprar
                         <span class="glyphicon glyphicon-ok"></span>
                     </button>
                  
                </div>
            </div>
           
        </div>
         
    </div>
    
    <br>
    <div class="row"  style="background-color: white;">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Descripcion</a></li>
            <li>
                <a data-toggle="tab" href="#menu1">
                    Ficha tecnica
                    <span class="glyphicon glyphicon-wrench" aria-hidden="true">
                </a>
                
            </li>
            <li>
                <a data-toggle="tab" href="#menu2">
                    Productos en el carro 
                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
                        
                    </span>
                </a>
            </li>
        </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          {{$producto->descripcion}}
        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>Menu 1</h3>
          <p>Some content in menu 1.</p>
        </div>
        <div id="menu2" class="tab-pane fade" style="padding:10px">
            <h3>Productos en el carro</h3>
            
          @include('partials.carro.contenido_carro')
        </div>
    </div>
    </div>
</div>
@stop