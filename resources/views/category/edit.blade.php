@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/category/'.$categoryData->id) }}" method="post">
    @csrf
    @include('category.form',['mode'=>'Editar'])
    {{ method_field('PATCH') }}
</form>

</div>

@endsection