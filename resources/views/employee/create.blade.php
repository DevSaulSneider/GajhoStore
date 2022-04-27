@extends('layouts.admin')

@section('content')
<div class="container">

<form action="{{ url('/employee') }}" method="post">
    @csrf
    @include('employee.form', ['mode'=>'Crear'])
</form>

</div>

@endsection