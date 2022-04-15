<h1>{{ $mode }} Categoria</h1>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ isset($categoryData->name)?$categoryData->name:old('name') }}" class="form-control">
</div>
<br>
<input class="btn btn-success" type="submit" value="{{ $mode }} datos">
<a class="btn btn-primary" href="{{ url('category') }}">Regresar</a>