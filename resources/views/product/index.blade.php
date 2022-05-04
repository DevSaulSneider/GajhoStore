@extends('layouts.admin')

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

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>N°</th>

                                    <th>Categoria</th>
                                    <th>Usuario</th>
                                    <th>Producto</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Estado</th>
                                    <th>Precio</th>
                                    <th>Precio descuento</th>
                                    <th>Imagen</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->user->name }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->state }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->discount_price }}</td>
                                    <td>
                                        <img class="img-thumbnail" src="{{ asset('storage').'/'.$product->image}}" alt="" width="100" height="100">
                                    </td>

                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary rounded-pill " href="{{ route('products.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                            <a class="btn btn-sm btn-success rounded-pill" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm rounded-pill"><i class="fa fa-fw fa-trash"></i> Borrar</button>
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
    .card-header{
        background-color: #7F3EE9;
    }

    #btncrear:hover {
        background-color: #DDDDDD;
        transition: background-color 2s;
    }
</style>
@endsection