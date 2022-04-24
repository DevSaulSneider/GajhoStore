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

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paymentMethods as $paymentMethod)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $paymentMethod->name }}</td>

                                            <td>
                                                <form action="{{ route('payment-methods.destroy',$paymentMethod->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-success rounded-pill" href="{{ route('payment-methods.edit',$paymentMethod->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
