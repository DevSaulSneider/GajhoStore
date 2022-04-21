<h1>{{ $mode }} Empleado</h1>
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
    <input type="text" name="name" id="name" value="{{ isset($employee->name)?$employee->name:old('name') }}" class="form-control">
    <label for="lastName">Apellido</label>
    <input type="text" name="lastName" id="lastName" value="{{ isset($employee->lastName)?$employee->lastName:old('lastName') }}" class="form-control">
    <label for="phone">Telefono</label>
    <input type="text" name="phone" id="phone" value="{{ isset($employee->phone)?$employee->phone:old('phone') }}" class="form-control">
    <label for="email">Correo</label>

    <input type="text" name="email" id="email" value="{{ isset($employee->email)?$employee->email:old('email') }}" class="form-control">
    <div class="form-group">
        <input id="user_id" name="user_id" type="hidden" value="{{ $id = Auth::user()->id; }}">
    </div>
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" value="{{ isset($employee->password)?$employee->password:old('password') }}" class="form-control">
    {{ Form::label('turno') }}
    {{ Form::select('turn_id', $turns, $employee->turn_id, ['class' => 'form-control' . ($errors->has('turn_id') ? ' is-invalid' : ''), 'placeholder' => '--Seleccione--']) }}
    {!! $errors->first('turn_id', '<div class="invalid-feedback">:message</div>') !!}

    <input type="email" name="email" id="email" value="{{ isset($employeeData->email)?$employeeData->email:old('email') }}" class="form-control">
    <label for="userName">Usuario</label>
    <input type="text" name="userName" id="userName" value="{{ isset($employeeData->userName)?$employeeData->userName:old('userName') }}" class="form-control">
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" value="{{ isset($employeeData->password)?$employeeData->password:old('password') }}" class="form-control">
    <label for="turn_id">Id_Turno</label>
    <input type="text" name="turn_id" id="turn_id" value="{{ isset($employeeData->turn_id)?$employeeData->turn_id:old('turn_id') }}" class="form-control">

</div>
<br>
<input class="btn btn-success" type="submit" value="{{ $mode }} datos">
<a class="btn btn-primary" href="{{ url('employee') }}">Regresar</a>