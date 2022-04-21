@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/employee/'.$employee->id) }}" method="post">
    @csrf
    @include('employee.form',['mode'=>'Editar'])
    {{ method_field('PATCH') }}
</form>

</div>

@endsection