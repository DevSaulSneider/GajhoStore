@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>!Compra exitosa!</h1>
    <img class="mx-auto d-block mb-4" width="300px" src="{{ asset('image/compra-completada.png') }}" alt="">
    <a class="d-inline text-center btn btn-primary" href="{{ route('index') }}"> Ir a la pagina principal</a>
</div>
@endsection