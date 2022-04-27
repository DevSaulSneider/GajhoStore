@extends('layouts.app')

@section('content')
<div class="container">
    
    <div>
        <!-- Div imagenes  Piero -->
    </div>

    <div>
        <!-- Caracteristicas del servicio  Romano -->
    </div>

    <div>
        <!-- Los mas vendidos  Marcos -->
    </div>

    <div>
        <!-- Comprar por categorias  Gael -->
        <div class="fila">
            <div class="columna"><div class="circular--landscape"><img src="{{URL::asset('image/img-category/laptop.jpg')}}"></div></div>
            <div class="columna"><div class="circular--landscape"><img src="{{URL::asset('image/img-category/celular.jpg')}}"></div></div>
            <div class="columna"><div class="circular--landscape"><img src="{{URL::asset('image/img-category/drone.jpg')}}"></div></div>
            <div class="columna"><div class="circular--landscape"><img src="{{URL::asset('image/img-category/tablet.jpg')}}"></div></div>
        </div>
        <div class="fila">
            <div class="columna"><label for=""><b>Computers</b></label></div>
            <div class="columna"><label for=""><b>Mobile</b></label></div>
            <div class="columna"><label for=""><b>Drones & Cameras</b></label></div>
            <div class="columna"><label for=""><b>Tablets</b></label></div>
        </div> <br><br>
        <div class="fila">
            <div class="columna"><div class="circular--landscape"><img src="{{URL::asset('image/img-category/televisor.jpg')}}"></div></div>
            <div class="columna"><div class="circular--landscape"><img src="{{URL::asset('image/img-category/reloj.jpg')}}"></div></div>
            <div class="columna"><div class="circular--landscape"><img src="{{URL::asset('image/img-category/parlante.jpg')}}"></div></div>
            <div class="columna"><div class="circular--landscape"><img src="{{URL::asset('image/img-category/audifonos.jpg')}}"></div></div>
        </div>
        <div class="fila">
            <div class="columna"><label for=""><b>T.V & Home Cinema</b></label></div>
            <div class="columna"><label for=""><b>Werable Tech</b></label></div>
            <div class="columna"><label for=""><b>Speakers</b></label></div>
            <div class="columna"><label for=""><b>Headphones</b></label></div>
        </div>
    </div>
 
    
</div>

<style>
     .columna {
            float: left;
            width: 25%;
            padding-right: 5px;
        }

        .fila::after {
            content: "";
            clear: both;
            display: table;
        }
    .circular--landscape {
  position: relative;
  width: 200px;
  height: 200px;
  overflow: hidden;
  border-radius: 50%;
  background-color: black;
}

.circular--landscape img {
  width: 100%;
  height: auto;
}


</style>
@endsection