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

    /* .card {
        border: none !important;
    } */
</style>