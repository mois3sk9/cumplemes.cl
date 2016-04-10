@extends('master')

@section('nav')
    

{{-- Sobreescribimos la navegacion, sin embargo la dejamos con la propiedad navbar static para que no interfiera con el contenido --}}
    @include('partials.master_partials.nav', ['static'=>1])

@stop

@section('scripts')
@parent
<script>
   $('body').addClass('background-pattern');
</script>
@stop
