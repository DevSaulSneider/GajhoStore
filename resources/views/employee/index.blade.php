@extends('layouts.app')

@section('content')
<div class="container">

    <a href="{{ url('employee/create') }}" class="btn btn-success">Registrar nuevo empleado</a>
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
    <table class="table table-ligth">
        <thead class="thead-ligth">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Id_Turno</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->lastName}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->userName}}</td>
                <td>{{$employee->password}}</td>
                <td>{{$employee->turn_id}}</td>
                <td><a href="{{ url('/employee/'.$employee->id.'/edit') }}" class="btn btn-warning"> Editar</a></td>
                <td>
                    <form action="{{ url('/employee/'.$employee->id)}}" method="post" class="d-inline">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Borrar" onclick="return confirm('¿Desea borrar este registro?')" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!!$employees->links()!!}
</div>

@endsection