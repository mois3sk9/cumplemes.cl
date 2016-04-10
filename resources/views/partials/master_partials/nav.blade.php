 
 <nav class="navbar navbar-default   {{ isset($static) ? 'navbar-static-top' : 'navbar-fixed-top' }} ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
         <img alt="Brand" src="{{ asset('images/icono.png') }}" class="img-responsive" width="50px" height="50px">
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Regalos</a></li>
        <li><a href="#">Lugares</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">opcion</a></li>
        <li><a href="#">opcion</a></li>
        <li><a href="#">opcion</a></li>
        <li><a href="#">opcion</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        </form>

        <li class="dropdown"> {{--Carrito de compras--}}

           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          
          <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
      
           <span class="caret"></span></a>

           <ul class="dropdown-menu">
               <li><a href="#">Cantidad de productos: <span id="navCantidadProductos">0</span></a></li>
            <li><a href="#">Total: $0</a></li>
            <li><a href="#">Ir al detalle del carro</a></li>
          </ul>
      
        </li>
      
        <li class="dropdown"> {{--Datos de usuario--}}
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      
           <span class="caret"></span></a>
          <ul class="dropdown-menu">
              @if(Auth::check())
                 <li><a href="#">Mi cuenta</a></li>
                  <li><a href="#">Configuracion</a></li>
                <li><a href="#">Historial de compras</a></li>
              @else
                <li><a href="{{route('login')}}">Iniciar sesion</a></li>
                <li><a href="{{route('registrarUsuario')}}">Registrarse</a></li>
              @endif
              
            @if(Auth::check())
                 <li role="separator" class="divider"></li>
                <li><a href="{{ route('salir') }}">Salir</a></li>
            @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>