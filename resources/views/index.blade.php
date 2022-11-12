@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <!-- Div imagenes  Piero -->
        <section class="imagen-contacto">
            <div class="contenedor">
                <h1 class="h1black text-light">Precios increíbles en todos tus artículos favoritos</h1>
                <p class="h1black">Obtenga más por menos en marcas seleccionadas
                </p>
                <a href="/catalogue" class="boton-amarillo">Ver Catálogo</a>
            </div>
        </section>

        <div class="row">
            <div class="col">
                <section class="imagen-contacto img2 izquierda">
                    <div class="contenedor contenido-centrado1">
                        <p>Ofertas de vacaciones</p>
                        <h1>Hasta
                        </h1>
                        <h1> 30% de</h1>
                        <h1>descuento</h1>
                        <p>Marcas de teléfonos inteligentes
                        </p>
                        <p>seleccionadas</p>
                        <a href="#" class="boton-amarillo">Comprar Ahora</a>
                    </div>
                </section>
            </div>
            <div class="col">
                <section class="imagen-contacto img3 derecha">
                    <div class="contenedor contenido-centrado1">
                        <p>Recien llegado</p>
                        <h1>Lleva tu</h1>
                        <h1>sonido</h1>
                        <h1>a cualquier parte</h1>
                        <p>Las mejores marcas de auriculares
                        </p>
                        <a href="#" class="boton-amarillo">Comprar Ahora</a>
                    </div>
                </section>
            </div>

        </div>
        <!-- Div imagenes  Piero -->

    </div>
</div>
<div class="container">


    <!-- <div class="text-center border border-dark border-3 bg-white p-4" id="contenido">
         Caracteristicas del servicio  Romano 
        <div class="d-flex flex-column align-items-center justify-content-center" style="max-width: 250px;">
            <img width="80px" src="{{URL::asset('/image/moto.png')}}">
            <p class="">Recogida en la acera</p>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center" style="max-width: 250px;">
            <img width="80px" src="{{URL::asset('/image/caja.png')}}">
            <p class="">Envío gratuito en pedidos superiores a 50 dólares</p>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center" style="max-width: 250px;">
            <img width="80px" src="{{URL::asset('/image/porcentaje.png')}}">
            <p class="">Precios bajos garantizados</p>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center" style="max-width: 250px;">
            <img width="80px" src="{{URL::asset('/image/tiempo.png')}}">
            <p class="">Disponibilidad 24/7</p>
        </div>
    </div> -->

    <div>
        <!-- Los mas vendidos  Marcos -->
        <div class="p-4 bg-white text-center">
            <h1>Lo mas vendido</h1>
            <div class="d-flex justify-content-between">
                @foreach($mostSelled->sortByDesc('sold') as $product)

                <div class="card" style="width: 18rem;">
                    <a href="{{route('productById', ['productId' => $product->id])}}">
                        <img class="card-img-top cover" src="{{ asset('storage').'/'.$product->image }}" alt="Card image cap" height="200px">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text w-100 overflow-hidden" style="max-height:60px;text-overflow: ellipsis;-webkit-line-clamp: 2;-webkit-box-orient: vertical;display: -webkit-box;">
                                {{$product->description}}
                            </p>
                        <h3 class="text-primary">S/. {{$product->price}}</h3>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="btn btn-primary my-4"> Ver todo </button>
        </div>
        <div>
            <div class="p-4 bg-white text-center">
                <h1>Precios mas bajos</h1>
                <div class="d-flex justify-content-between">
                    @foreach($offer as $p)

                    <div class="card" style="width: 18rem;">
                        <a href="{{route('productById', ['productId' => $p->id])}}">
                            <img class="card-img-top cover" src="{{ asset('storage').'/'.$p->image }}" alt="Card image cap" height="200px">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{$p->name}}</h5>
                            <p class="card-text w-100 overflow-hidden" style="max-height:60px;text-overflow: ellipsis;-webkit-line-clamp: 2;-webkit-box-orient: vertical;display: -webkit-box;">
                                {{$p->description}}
                            </p>
                            <h3 class="text-primary">S/. {{$p->price}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="btn btn-primary my-4"> Ver todo </button>
            </div>
        </div>
    </div>

    <div class="mb-4">
        <!-- Comprar por categorias  Gael -->
        <div class="d-flex">

            <div class="mx-auto">
                <div class="circular--landscape">
                    <a href="{{route('filterByCategory', 4)}}"><img src="{{URL::asset('image/img-category/laptop.jpg')}}"></a>
                </div>
            </div>
            <div class="mx-auto">
                <div class="circular--landscape">
                    <a href="{{route('filterByCategory', 9)}}"><img src="{{URL::asset('image/img-category/celular.jpg')}}"></a>
                </div>
            </div>
            <div class="mx-auto">
                <div class="circular--landscape">
                    <a href="{{route('filterByCategory', 6)}}"><img src="{{URL::asset('image/img-category/drone.jpg')}}"></a>
                </div>
            </div>
            <div class="mx-auto">
                <div class="circular--landscape">
                    <a href="{{route('filterByCategory', 5)}}"><img src="{{URL::asset('image/img-category/tablet.jpg')}}"></a>
                </div>
            </div>

        </div>
        <div class="fila text-center mt-3">
            <div class="columna"><label for=""><b>Computers</b></label></div>
            <div class="columna"><label for=""><b>Mobile</b></label></div>
            <div class="columna"><label for=""><b>Drones & Cameras</b></label></div>
            <div class="columna"><label for=""><b>Tablets</b></label></div>
        </div> <br><br>
        <div class="d-flex">

            <div class="mx-auto">
                <div class="circular--landscape">
                    <a href="{{route('filterByCategory', 10)}}"><img src="{{URL::asset('image/img-category/televisor.jpg')}}"></a>
                </div>
            </div>
            <div class="mx-auto">
                <div class="circular--landscape">
                    <a href="{{route('filterByCategory', 11)}}"><img src="{{URL::asset('image/img-category/reloj.jpg')}}"></a>
                </div>
            </div>
            <div class="mx-auto">
                <div class="circular--landscape">
                    <a href="{{route('filterByCategory', 8)}}"><img src="{{URL::asset('image/img-category/parlante.jpg')}}"></a>
                </div>
            </div>
            <div class="mx-auto">
                <div class="circular--landscape">
                    <a href="{{route('filterByCategory', 7)}}"><img src="{{URL::asset('image/img-category/audifonos.jpg')}}"></a>
                </div>
            </div>

        </div>
        <div class="fila text-center mt-3">
            <div class="columna"><label for=""><b>T.V & Home Cinema</b></label></div>
            <div class="columna"><label for=""><b>Werable Tech</b></label></div>
            <div class="columna"><label for=""><b>Speakers</b></label></div>
            <div class="columna"><label for=""><b>Headphones</b></label></div>
        </div>
    </div>
</div>


@endsection

<style>
    body::-webkit-scrollbar {
        width: 10px;
    }

    body::-webkit-scrollbar-thumb {
        border-radius: 50px;
        border-style: solid;
        background: #741efe;
    }

    .cover {
        object-fit: cover;
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