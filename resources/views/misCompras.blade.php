@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center h1">Mis compras</h1>

    <div class="table-responsive mt-4">
        <table class="table table-hover text-center table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Fecha de pedido</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                @foreach ($detalleCompra as $dato)
                <tr>
                    <th>{{ $dato->id_product }}</th>
                    <th>
                    <img class="img-thumbnail" style="width:60px;height:60px;object-fit:contain" src="{{ asset('storage').'/'.$dato->image }}" alt="{{$dato->name}}">
                    </th>
                    <th>{{ $dato->name }}</th>
                    <th>{{ $dato->created_at }}</th>
                    <th>{{ $dato->quantity_product }}u.</th>
                    <th>S/{{ $dato->price }}</th>
                    <th>S/{{ $dato->price * $dato->quantity }}</th>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
