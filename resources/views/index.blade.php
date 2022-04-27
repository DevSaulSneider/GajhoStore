@extends('layouts.app')

@section('content')
<div class="container">
    
    <div>
        <!-- Div imagenes  Piero -->
    </div>

    <div class="boxcarac border border-dark border-3">
        <!-- Caracteristicas del servicio  Romano -->
        <div id="contenido">
            <div>
                <img class="imag d-inline p-2" src="{{URL::asset('/image/moto.png')}}">
                <p id="info" class="d-inline p-2">Recogida en la acera</p>
            </div>
            <div>
                <img class="imagcaja d-inline p-2" src="{{URL::asset('/image/caja.png')}}">
                <p id="info" class="d-inline p-2">Envío gratuito en pedidos superiores a 50 dólares</p>
            </div>
            <div>
                <img class="imag d-inline p-2" src="{{URL::asset('/image/porcentaje.png')}}">
                <p id="info" class="d-inline p-2">Precios bajos garantizados</p>
            </div>
            <div>
                <img class="imagtiempo d-inline p-2" src="{{URL::asset('/image/tiempo.png')}}">
                <p id="info" class="d-inline p-2">Disponibilidad 24/7</p>
            </div>
        </div>
    </div>

    <div>
        <!-- Los mas vendidos  Marcos -->
    </div>

    <div>
        <!-- Comprar por categorias  Gael -->
    </div>
    
</div>
<style>
    .boxcarac {
        position: absolute;
        margin-top: 20px;
        /* borrar luego*/
        height: 150px;
        width: 1300px;
    }

    #contenido {
        position: relative;
        display: flex;
        justify-content: space-around;
        margin-top: 40px;
    }

    .imag {
        position: relative;
        display: flex;
        width: 80px;
    }

    .imagcaja {
        position: relative;
        display: flex;
        width: 70px;
    }

    .imagtiempo {
        position: relative;
        display: flex;
        width: 70px;
    }

    #info{
        display: inline-flex;
        height: 3em;
        width: 120px;
    }
</style>
@endsection