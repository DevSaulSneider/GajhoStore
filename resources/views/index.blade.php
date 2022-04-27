@extends('layouts.app')

@section('content')

<div class="container">

    <div>
        <!-- Div imagenes  Piero -->
        <section class="imagen-contacto" style="background-position: center center;
    background-size: cover;
    height: 33rem;
    display: flex;
    align-items: center;
    text-align: center;
    background-image: url('image/index_ofertas/img_contacto.jpg');
    font-family: 'Lato', sans-serif;
    margin-bottom: .5rem;">
            <div class="contenedor contenido-centrado" style="width: 95%;
    max-width: 120rem;
    margin: 0 auto;">
                <h2 style="font-family: 'Lato', sans-serif; font-size: 2rem;font-weight: black;color: #fff;">Lorem ipsum dolor
                    sit amet</h2>
                <p style="font-family: 'Lato', sans-serif; font-size: 1rem;color: #fff;">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Laboriosam magnam quis suscipit minima unde aliquid in! Dolores incidunt odio veniam
                    similique ex. Veritatis optio qui nam hic! Nobis, natus expedita.</p>
                <a href="#" class="boton boton-amarillo" style="color: #fff;
    font-weight: bold;
    text-decoration: none;
    font-size: 1rem;
    padding: 1rem 3rem;
    margin-top: 2.5rem;
    text-align: center;
    border: none;
    display: block;
    flex: 0 0 100%;
    background-color:rgb(116, 30, 254); ;
    width: auto;   
    display: inline-block;">Comprar Ahora</a>
            </div>
        </section>

        <div class="row">
            <div class="col">
                <section class="imagen-contacto" style="background-position: center center;
    background-size: cover;
    height: 33rem;
    display: flex;
    align-items: center;
    text-align: left;
    background-image: url('image/index_ofertas/img_contacto2.jpg');
    font-family: 'Lato', sans-serif;">
                    <div class="contenedor contenido-centrado" style="width: 80%;
    max-width: 120rem;
    margin: 0 auto;">
                        <h2 style="font-family: 'Lato', sans-serif; font-size: 2rem;font-weight: black;color: #fff;">Lorem ipsum dolor
                            sit amet</h2>
                        <p style="font-family: 'Lato', sans-serif; font-size: 1rem;color: #fff;">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Laboriosam magnam quis suscipit minima unde aliquid in! Dolores incidunt odio veniam
                            similique ex. Veritatis optio qui nam hic! Nobis, natus expedita.</p>
                        <a href="#" class="boton boton-amarillo" style="color: #fff;
    font-weight: bold;
    text-decoration: none;
    font-size: 1rem;
    padding: 1rem 3rem;
    margin-top: 2.5rem;
    text-align: center;
    border: none;
    display: block;
    flex: 0 0 100%;
    background-color:rgb(116, 30, 254); ;
    width: auto;   
    display: inline-block;">Comprar Ahora</a>
                    </div>
                </section>
            </div>
            <div class="col">
                <section class="imagen-contacto" style="background-position: center center;
    background-size: cover;
    height: 33rem;
    display: flex;
    align-items: center;
    text-align: right;
    background-image: url('image/index_ofertas/img_contacto3.jpg');
    font-family: 'Lato', sans-serif;">
                    <div class="contenedor contenido-centrado" style="width: 80%;
    max-width: 120rem;
    margin: 0 auto;">
                        <h2 style="font-family: 'Lato', sans-serif; font-size: 2rem;font-weight: black;color: #fff;">Lorem ipsum dolor
                            sit amet</h2>
                        <p style="font-family: 'Lato', sans-serif; font-size: 1rem;color: #fff;">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Laboriosam magnam quis suscipit minima unde aliquid in! Dolores incidunt odio veniam
                            similique ex. Veritatis optio qui nam hic! Nobis, natus expedita.</p>
                        <a href="#" class="boton boton-amarillo" style="color: #fff;
    font-weight: bold;
    text-decoration: none;
    font-size: 1rem;
    padding: 1rem 3rem;
    margin-top: 2.5rem;
    text-align: center;
    border: none;
    display: block;
    flex: 0 0 100%;
    background-color:rgb(116, 30, 254); ;
    width: auto;   
    display: inline-block;">Comprar Ahora</a>
                    </div>
                </section>
            </div>

        </div>
        <!-- Div imagenes  Piero -->

    </div>

    <div>
        <!-- Caracteristicas del servicio  Romano -->
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
            <button class="btn btn-primary"> Ver todo </button>
        </div>
    </div>

    <div>
        <!-- Comprar por categorias  Gael -->
    </div>
</div>
@endsection

<style>
    .cover {
        object-fit: cover;
    }
</style>