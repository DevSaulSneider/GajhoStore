@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header " style="background-color: #7F3EE9;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <b><span id="card_title" style="color: #ffff;">
                                {{ __('Categorias') }}
                            </span></b>

                        <div class="float-right">
                            <a id="btncrear" href="{{ route('category.create') }}"
                                class="btn btn-light rounded-pill btn-sm float-right" data-placement="left">
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
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead">
                            <tr>
                                <th>N°</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <form action="{{ url('/category/'.$category->id)}}" method="post" class="d-inline">
                                        <a href="{{ url('/category/'.$category->id.'/edit') }}"
                                            class="btn btn-sm btn-success rounded-pill"><i class="fa fa-fw fa-edit"></i>
                                            Editar</a>
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm rounded-pill"><i
                                                class="fa fa-fw fa-trash"></i> Borrar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <form action="{{route('category.index')}}" method="get">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="filter" class="col-sm-2 col-form-label">Buscar</label>
                                    <div class="d-flex w-25">
                                        <input type="text" class="form-control" name="filter" value="{{ $filter }}">
                                    </div>
                                    <input type="submit" class="btn btn-primary mt-2" value="Enviar" name="Enviar">
                                </div>
                            </form>
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