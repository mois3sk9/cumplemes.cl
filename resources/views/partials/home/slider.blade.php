
{{--Carrusel de la pagina principal--}}

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('images/dados.jpg')}}" alt="...">
      <div class="carousel-caption">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <h1>Mira lo que Cumplemes.cl tiene para tu Polol@!</h1>
          </div>
          <div class="col-md-3">
            <img src="{{asset('images/icono.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="item">
     <img src="{{ asset('images/deditos.jpg')}}" alt="...">
      <div class="carousel-caption">
       <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <h1>Bienvenidos a cumplemes.cl</h1>
          </div>
          <div class="col-md-3">
           Pincha aquí!!
          </div>
        </div>
      </div>
    </div>
    <div class="item">
     <img src="{{ asset('images/lluvia.jpg')}}" alt="...">
      <div class="carousel-caption">
        <h1>Encontrarás el regalo perfecto para tu pareja</h1>
      </div>
    </div>
    <div class="item">
     <img src="{{ asset('images/valentine.jpg')}}" alt="...">
      <div class="carousel-caption">
        <h1>Mira aquí los regalos recomendados del día de hoy</h1>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>