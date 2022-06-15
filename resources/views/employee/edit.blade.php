@extends('layouts.app')

@section('content')
<section class="content container">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Editar Empleado</span>
                    
                </div>
                        
                <div class="card-body">
                    <form method="POST" action="{{ route('employee.update', $employee->id) }}" role="form">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('employee.form',['mode'=>'Editar'])
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection