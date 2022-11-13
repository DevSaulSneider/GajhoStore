@extends('layouts.app')


@section('template_title')
Product
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center; ">

                        <b><span id="card_title" style="color: #ffff;">
                                {{ __('Productos') }}
                            </span></b>

                        <div class="float-right">
                            <a id="btncrear" href="{{ route('products.create') }}" class="btn btn-light rounded-pill btn-sm float-right" data-placement="left">
                                {{ __('Crear Producto') }}
                            </a>
                        </div>
                    </div>
                </div>

                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                @endif

                
                <div class="d-flex w-100 px-3 mt-4">
                    <div class="w-50 pe-2">
                        <form method="GET" action="{{ route('product.consultarProductoPorID') }}">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="consultaID" class="col-form-label">Consultar Producto</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control shadow-none" id="consultaID" name="consultaID"  placeholder="Consultar por ID de producto">
                                    <button type="submit" class="btn btn-primary mx-1">Consultar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="w-50 ps-2">
                        <form method="GET" action="{{ route('products.index') }}">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="filtrarNombre" class="col-form-label">Filtrar Producto</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control shadow-none" id="filtrarNombre" name="filtrarNombre" placeholder="Filtrar por nombre de producto">
                                    <button type="submit" class="btn btn-primary mx-1">Filtrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-inline px-3">
                    <a href="{{ route('products.index') }}" class="btn btn-warning ">Listar Productos</a>
                </div>

                <div class="card-body mt-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover text-center">
                            <thead class="thead">
                                <tr>
                                    <th>Código</th>
                                    <th>Categoría</th>
                                    <th>Producto</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Prec. Descuento</th>
                                    <th>Imagen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->categoria }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                        {{ $product->description }}
                                        </span>
                                    </td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>S/{{ $product->price }}</td>
                                    <td>S/{{ $product->discount_price }}</td>
                                    <td style="width:60px;height:60px">
                                        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$product->image}}" alt="">
                                    </td>

                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary rounded-pill " href="{{ route('products.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                            <a class="btn btn-sm btn-success rounded-pill" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm rounded-pill"><i class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $products->links() !!}
        </div>
    </div>
</div>
<style>
    .card-header {
        background-color: #7F3EE9;
    }

    #btncrear:hover {
        background-color: #DDDDDD;
        transition: background-color 2s;
    }
</style>
@endsection