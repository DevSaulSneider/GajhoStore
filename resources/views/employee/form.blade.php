<!-- <h1>{{ $mode }} Empleado</h1> -->
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ isset($employee->name)?$employee->name:old('name') }}" class="form-control mb-3" placeholder="Ingrese nombre del empleado">
            <label for="lastName">Apellido</label>
            <input type="text" name="lastName" id="lastName" value="{{ isset($employee->lastName)?$employee->lastName:old('lastName') }}" class="form-control mb-3" placeholder="Ingrese apellido del empleado">
            <label for="phone">Telefono</label>
            <input type="text" name="phone" id="phone" value="{{ isset($employee->phone)?$employee->phone:old('phone') }}" class="form-control mb-3" placeholder="Ingrese telefono del empleado">
            <label for="email">Correo</label>
            <input type="text" name="email" id="email" value="{{ isset($employee->email)?$employee->email:old('email') }}" class="form-control mb-3" placeholder="Ingrese correo del empleado">
            <label for="username">Usuario</label>
            <input type="text" name="username" id="username" value="{{ isset($employeeData->username)?$employeeData->username:old('username') }}" class="form-control mb-3" placeholder="Ingrese usuario del empleado">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" value="{{ isset($employee->password)?$employee->password:old('password') }}" class="form-control mb-3"  placeholder="Ingrese clave del empleado">
            {{ Form::label('turno') }}
            {{ Form::select('turn_id', $turns, $employee->turn_id, ['class' => 'form-control' . ($errors->has('turn_id') ? ' is-invalid' : ''), 'placeholder' => '--Seleccione turno--']) }}
            {!! $errors->first('turn_id', '<div class="invalid-feedback">:message</div>') !!}

        </div>
    </div>
</div>

<br>

<input class="btn btn-success" type="submit" value="Crear">
<a class="btn btn-primary" href="{{ url('employee') }}">Atras</a>