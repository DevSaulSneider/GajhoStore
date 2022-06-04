@extends('layouts.admin')
@section('template_title')
Employee
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <b><span id="card_title" style="color: #ffff;">
                                {{ __('Empleados') }}
                            </span></b>

                        <div class="float-right">
                            <a id="btncrear" href="{{ route('employee.create') }}"
                                class="btn btn-light rounded-pill btn-sm float-right" data-placement="left">
                                {{ __('Crear Empleado') }}
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

                                    <td>{{++$i}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->lastName}}</td>
                                    <td>{{$employee->phone}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->username }}</td>
                                    <td>{{$employee->turn_id}}</td>


                                    <td><a href="{{ url('/employee/'.$employee->id.'/edit') }}"
                                            class="btn btn-sm btn-success rounded-pill "><i
                                                class="fa fa-fw fa-edit"></i> Editar</a></td>
                                    <td>
                                        <form action="{{ url('/employee/'.$employee->id)}}" method="post"
                                            class="d-inline">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit"
                                                onclick="return confirm('¿Desea borrar este registro?')"
                                                class="btn btn-danger btn-sm rounded-pill"><i
                                                    class="fa fa-fw fa-trash"></i> Borrar </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                <form action="{{route('employee.index')}}" method="get">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label for="filter" class="col-sm-2 col-form-label">Buscar</label>
                                        <div class="d-flex w-25">
                                            <input type="text" class="form-control" name="filter" value="{{$filter}}">
                                        </div>
                                        <div>
                                            <input type="submit" class="btn btn-primary mt-2" value="Buscar">
                                        </div>
                                    </div>
                                </form>
                            </tbody>
                        </table>
                    </div>
                    {!! $employees->links() !!}
                </div>
            </div>
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