<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $paymentMethod->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div><BR>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Crear</button>
        <a class="btn btn-primary" href="{{ url('payment-methods') }}">Atras</a>
    </div>
</div>