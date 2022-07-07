@extends('layouts.app')

@section('template_title')
Product
@endsection
@section('content')
<div class="container">
    <div class="d-flex">
        <!-- <div class="sidebar" style="background-color: white; width: 15rem;"> -->
        <div class="p-4" style="background-color: white; min-width:250px;">
            <h3>Historial de ventas</h3>
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
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td style="width:60px;height:60px">
                            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$product->image}}" alt="">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{$product->created_at}}</td>
                        <td>S/{{ $product->price }}</td>
                        <td>S/{{ $product->discount_price }}</td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <form action="{{ route('editarPublicaciones') }}" method="GET">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <button type="submit"></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection