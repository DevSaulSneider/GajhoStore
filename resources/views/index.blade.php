@extends('layouts.app')

@section('content')

<div class="container">

    <div>
        <!-- Div imagenes  Piero -->
        <section class="imagen-contacto">
            <div class="contenedor">
                <h2>Lorem ipsum dolor
                    sit amet</h2>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Laboriosam magnam quis suscipit minima unde aliquid in! Dolores incidunt odio veniam
                    similique ex. Veritatis optio qui nam hic! Nobis, natus expedita.</p>
                <a href="#" class="boton-amarillo">Comprar Ahora</a>
            </div>
        </section>

        <div class="row">
            <div class="col">
                <section class="imagen-contacto img2 izquierda">
                    <div class="contenedor contenido-centrado1">
                        <h2>Lorem ipsum dolor
                            sit amet</h2>
                        <p>Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Laboriosam magnam quis suscipit minima unde aliquid in! Dolores incidunt odio veniam
                            similique ex. Veritatis optio qui nam hic! Nobis, natus expedita.</p>
                        <a href="#" class="boton-amarillo" >Comprar Ahora</a>
                    </div>
                </section>
            </div>
            <div class="col">
                <section class="imagen-contacto img3 derecha">
                    <div class="contenedor contenido-centrado1">
                        <h2>Lorem ipsum dolor
                            sit amet</h2>
                        <p>Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Laboriosam magnam quis suscipit minima unde aliquid in! Dolores incidunt odio veniam
                            similique ex. Veritatis optio qui nam hic! Nobis, natus expedita.</p>
                        <a href="#" class="boton-amarillo">Comprar Ahora</a>
                    </div>
                </section>
            </div>

        </div>
        <!-- Div imagenes  Piero -->

    </div>

    <div class="boxcarac border border-dark border-3 bg-white my-4">
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
        <div class="p-4 bg-white text-center">
            <h1>Lo mas vendido</h1>
            <div class="d-flex justify-content-between">
                @foreach($mostSelled as $product)
                <div class="card" style="width: 18rem;">
                    <a href="#">
                        <img class="card-img-top cover" src="{{ asset('storage').'/'.$product->image }}" alt="Card image cap" height="200px">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <h3 class="text-primary">S/. {{$product->price}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="btn btn-primary my-4"> Ver todo </button>
        </div>
    </div>

    <div class="mb-4">
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
@endsection

<style>
    .cover {
        object-fit: cover;
    }

    .boxcarac {
        margin-top: 20px;
        /* borrar luego*/
        height: 150px;
        width: 1300px;
    }

    #contenido {
        display: flex;
        justify-content: space-around;
        margin-top: 40px;
    }

    .imag {
        display: flex;
        width: 80px;
    }

    .imagcaja {
        display: flex;
        width: 70px;
    }

    .imagtiempo {
        display: flex;
        width: 70px;
    }

    #info {
        display: inline-flex;
        height: 3em;
        width: 120px;
    }

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

