@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/category') }}" method="post">
    @csrf
    @include('category.form', ['mode'=>'Crear'])
</form>

</div>

@endsection