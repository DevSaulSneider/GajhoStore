@extends('layouts.app')

@section('template_title')
Product
@endsection
@section('content')
<div class="container">
    <div class="d-flex">
        <!-- <div class="sidebar" style="background-color: white; width: 15rem;"> -->
        <div class="p-4" style="min-width:250px;">
            <h2>Mis publicaciones</h2>
        </div>
    </div>
    <div class="card-body mt-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Fecha de publicado</th>
                        <th>Precio</th>
                        <th>Precio descuento</th>
                        <th>Publicado</th>
                        <th>Vendido</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td style="width:70px;height:70px">
                            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$product->image}}" alt="">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{$product->created_at}}</td>
                        <td>S/{{ $product->price }}</td>
                        <td>S/{{ $product->discount_price }}</td>
                        <td>{{ $product->published }} Und.</td>
                        <td>{{ $product->sold }} Und.</td>
                        <td>{{ $product->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection