@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
    <div class="card-header" style="background-color: #7F3EE9;">
        <div style="display: flex; justify-content: space-between; align-items: center;">

            <b><span id="card_title" style="color: #ffff;">
                {{ __('Categorias') }}
            </span></b>

            <div class="float-right">
                <a id="btncrear" href="{{ route('category.create') }}" class="btn btn-light rounded-pill btn-sm float-right" data-placement="left">
                    {{ __('Crear Categoria') }}
                </a>
            </div>
        </div>
    </div>


    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
        
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    
    <div class="d-flex w-100 px-3 mt-4">
        <div class="w-50 pe-2">
            <form method="GET" action="{{ route('category.consultarCategoriaPorID') }}">
                @csrf
                <div class="form-group mb-2">
                    <label for="consultaID" class="col-form-label">Consultar Categoría</label>
                    <div class="d-flex">
                        <input type="text" class="form-control shadow-none" id="consultaID" name="consultaID"  placeholder="Consultar por ID de categoria">
                        <button type="submit" class="btn btn-primary mx-1">Consultar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="w-50 ps-2">
            <form method="GET" action="{{ route('category.index') }}">
                @csrf
                <div class="form-group mb-2">
                    <label for="filtrarNombre" class="col-form-label">Filtrar Categoria</label>
                    <div class="d-flex">
                        <input type="text" class="form-control shadow-none" id="filtrarNombre" name="filtrarNombre" placeholder="Filtrar por nombre de categoría">
                        <button type="submit" class="btn btn-primary mx-1">Filtrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="d-inline px-3">
        <a href="{{ route('category.index'); }}" class="btn btn-warning ">Listar Categorias</a>
    </div>

    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover text-center">
            <thead class="thead">
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td class="w-25">{{$category->id}}</td>
                    <td class="w-25">{{$category->name}}</td>
                    <td class="w-25">
                        <form action="{{ url('/category/'.$category->id)}}" method="post" class="d-inline">
                            <a href="{{ url('/category/'.$category->id.'/edit') }}" class="btn btn-sm btn-success rounded-pill"><i class="fa fa-fw fa-edit"></i> Editar</a>
                            @csrf
                            {{ method_field('DELETE') }}
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
      
    </div>
    <br>
    {!!$categories->links()!!}
</div>

    
    

</div>

@endsection