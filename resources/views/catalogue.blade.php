@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="content" style="display: flex; justify-content: space-between;"> -->
    <div class="d-flex">
        <!-- <div class="sidebar" style="background-color: white; width: 15rem;"> -->
        <div class="p-4" style="background-color: white; min-width:250px;">
            <h3>Filtrado por</h3>
            <hr>
            <h5 style="font-weight: 600;">Categorias</h5>
            <ul>
                @foreach($categories as $category)
                <a class="text-decoration-none text-black" href="{{route('filterByCategory', ['categoryId' => $category->id])}}">
                    <li style="font-weight: 600;">{{$category->name}}</li>
                </a>
                @endforeach
            </ul>
            <!-- <form method="GET" action="{{ route('catalogue') }}" id="formPrice"> -->
            <form method="GET" action="{{ route('catalogue') }}" id="formPrice">
            @csrf
                <div class="form-group mb-2">
                    <label for="filtrarPrecio" class="col-form-label">Filtrar Por Precio</label>
                         <div class="d-flex">
                            <span>Max &nbsp</span>
                             <!-- <input onchange="this.form.submit()" type="range" value="300" min="300" max="2500" oninput="this.nextElementSibling.value = this.value" name="filtrarPrecio"> -->
                             <input id="input_price" onchange="this.form.submit()" type="range" value="10" min="10" max="400" oninput="this.nextElementSibling.value = this.value" name="filtrarPrecio">
                             <output>400</output>
                        </div>
                </div>
            </form>
        </div>
        <!-- <div class="catalogue" style="width:100%; display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;"> -->
        <div style="width: 100%; margin-left: 20px;">

            @if (count($products)<=0)
                <div class="container my-5">
                    <h1 class="text-center h1"><i class="fa-solid fa-circle-exclamation"></i> No se encontraron datos</h1>
                </div>
            @endif

            <div class="contain__" style="display: grid;grid-template-columns: repeat(auto-fill,minmax(230px, 1fr));grid-gap: 1rem;">
                @foreach($products as $product)
                <a class="text-decoration-none" href="{{route('productById', ['productId' => $product->id])}}">
                    <div class="card border border-light" style="width: 14rem;">
                        <img class="card-img-top cover" src="{{ asset('storage').'/'.$product->image }}" alt="Card image cap" height="200px">
                        <div class="card-body">
                            <h5 class="card-title text-black">{{$product->name}}</h5>
                            <p class="card-text text-black">{{$product->description}}</p>
                            <h3 class="text-primary">S/. {{$product->price}}</h3>
                            <span class="spanCategoria" idCategoria="{{$product->category_id}}"></span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

