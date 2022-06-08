@extends('layouts.app')


@section('template_title')
    Payment Method
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title" style="color: #ffff;">
                                {{ __('Metodo de Pago') }}
                            </span>

                             <div class="float-right">
                                <a id="btncrearmetodo" href="{{ route('payment-methods.create') }}" class="btn btn-light btn-sm float-right rounded-pill"  data-placement="left">
                                  {{ __('Crear Metodo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="d-flex w-100 px-3 mt-4">
        <div class="w-50 pe-2">
            <form method="GET" action="{{ route('payment-methods.consultarMetodoPagoPorID') }}">
                @csrf
                <div class="form-group mb-2">
                    <label for="consultaID" class="col-form-label">Consultar Metodo de pago</label>
                    <div class="d-flex">
                        <input type="text" class="form-control shadow-none" id="consultaID" name="consultaID"  placeholder="Consultar por ID de metodo de pago">
                        <button type="submit" class="btn btn-primary mx-1">Consultar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="w-50 ps-2">
            <form method="GET" action="{{ route('payment-methods.index') }}">
                @csrf
                <div class="form-group mb-2">
                    <label for="filtrarNombre" class="col-form-label">Filtrar Metodo de pago</label>
                    <div class="d-flex">
                        <input type="text" class="form-control shadow-none" id="filtrarNombre" name="filtrarNombre" placeholder="Filtrar por nombre de metodo de pago">
                        <button type="submit" class="btn btn-primary mx-1">Filtrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="d-inline px-3">
        <a href="{{ route('payment-methods.index'); }}" class="btn btn-warning ">Listar Metodos de pago</a>
    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover text-center">
                                <thead class="thead">
                                    <tr>
                                        <th>Código</th>
										<th>Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paymentMethods as $paymentMethod)
                                        <tr>
                                            <td class="w-25">{{ $paymentMethod->id }}</td>
                                            
											<td class="w-25">{{ $paymentMethod->name }}</td>

                                            <td class="w-25">
                                                <form action="{{ route('payment-methods.destroy',$paymentMethod->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-success rounded-pill" href="{{ route('payment-methods.edit',$paymentMethod->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm rounded-pill"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <form action="{{route('payment-methods.index')}}" method="get">
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
                {!! $paymentMethods->links() !!}
            </div>
        </div>
    </div>
    <style>
    .card-header{
        background-color: #7F3EE9;
    }

    #btncrearmetodo:hover {
        background-color: #DDDDDD;
        transition: background-color 2s;
    }
</style>
@endsection
