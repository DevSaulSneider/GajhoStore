@extends('layouts.app')
@section('template_title')
Employee
@endsection
@section('content')
<div class="container">

    <a href="{{ url('employee/create') }}" class="btn btn-success rounded-pill">Registrar nuevo empleado</a>
    <br>
    <br>
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('success')}}

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
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
                <th>Turno</th>
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
                <td>{{$employee->username }}</td>
                <td>{{$employee->turns->turn}}</td>


                <td><a href="{{ url('/employee/'.$employee->id.'/edit') }}" class="btn btn-warning rounded-pill"><i class="fa fa-fw fa-edit"></i> Editar</a></td>
                <td>
                    <form action="{{ url('/employee/'.$employee->id)}}" method="post" class="d-inline">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Borrar" onclick="return confirm('¿Desea borrar este registro?')" class="btn btn-danger rounded-pill">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!!$employees->links()!!}
</div>

@endsection