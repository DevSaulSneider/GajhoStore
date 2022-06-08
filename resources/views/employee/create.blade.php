@extends('layouts.app')

@section('content')
<section class="content container">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Empleado</span>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('employee.store') }}"  role="form">
                            @csrf

                            @include('employee.form', ['mode'=>'Crear'])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection