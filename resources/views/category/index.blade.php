@extends('layouts.admin')

@section('content')
<div class="container">

    <a href="{{ url('category/create') }}" class="btn btn-success rounded-pill">Registrar nueva categoria</a>
    <br>
    <br>
    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
        
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <table class="table table-light">
        <thead class="thead-ligth">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td><a href="{{ url('/category/'.$category->id.'/edit') }}" class="btn btn-warning rounded-pill"><i class="fa fa-fw fa-edit"></i> Editar</a></td>
                <td>
                    <form action="{{ url('/category/'.$category->id)}}" method="post" class="d-inline">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Borrar" onclick="return confirm('¿Desea borrar este registro?')" class="btn btn-danger rounded-pill">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!!$categories->links()!!}

</div>

@endsection