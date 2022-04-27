@extends('layouts.admin')

@section('template_title')
    Update Payment Method
@endsection

@section('content')
    <section class="content container">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Metodo de Pago</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('payment-methods.update', $paymentMethod->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('payment-method.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
