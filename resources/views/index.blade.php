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
            <div class="columna"><div class="circular--landscape">
                <a href="#"><img src="{{URL::asset('image/img-category/laptop.jpg')}}"></a>
            </div>
        </div>
            <div class="columna"><div class="circular--landscape">
                <a href="#"><img src="{{URL::asset('image/img-category/celular.jpg')}}"></a>
            </div>
        </div>
            <div class="columna"><div class="circular--landscape">
                <a href="#"><img src="{{URL::asset('image/img-category/drone.jpg')}}"></a>
            </div>
        </div>
            <div class="columna"><div class="circular--landscape">
                <a href="#"><img src="{{URL::asset('image/img-category/tablet.jpg')}}"></a>
            </div>
        </div>
        </div>
        <div class="fila">
            <div class="columna"><label for=""><b>Computers</b></label></div>
            <div class="columna"><label for=""><b>Mobile</b></label></div>
            <div class="columna"><label for=""><b>Drones & Cameras</b></label></div>
            <div class="columna"><label for=""><b>Tablets</b></label></div>
        </div> <br><br>
        <div class="fila">
            <div class="columna"><div class="circular--landscape">
                <a href="#"><img src="{{URL::asset('image/img-category/televisor.jpg')}}"></a>
            </div>
        </div>
            <div class="columna"><div class="circular--landscape">
                <a href="#"><img src="{{URL::asset('image/img-category/reloj.jpg')}}"></a>
            </div>
        </div>
            <div class="columna"><div class="circular--landscape">
                <a href="#"><img src="{{URL::asset('image/img-category/parlante.jpg')}}"></a>
            </div>
        </div>
            <div class="columna"><div class="circular--landscape">
                <a href="#"><img src="{{URL::asset('image/img-category/audifonos.jpg')}}"></a>
            </div>
        </div>
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
.circular--landscape img:hover {
    background-color: black;
    transform: scale(1.15);
}


</style>
@endsection