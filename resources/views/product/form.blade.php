<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group mb-3">
            {{ Form::label('Categoría') }}
            {{ Form::select('category_id', $categories, $product->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => '--Seleccione categoría--']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <input id="user_id" name="user_id" type="hidden" value="{{ $id = Auth::user()->id; }}">
        
        </div>
        <div class="form-group mb-3">
            {{ Form::label('Nombre de producto') }}
            {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese nombre del producto']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{ Form::label('descripcion') }}
            {{ Form::text('description', $product->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese una descripción']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{ Form::label('informacion') }}
            {{ Form::text('information', $product->information, ['class' => 'form-control' . ($errors->has('information') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese la información', 'rows' => '4']) }}
            {!! $errors->first('information', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{ Form::label('cantidad') }}
            {{ Form::number('quantity', $product->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese una cantidad']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{ Form::label('estado de producto') }}
            {{ Form::select('state', array('R' => 'Reparado', 'S' => 'Segunda mano'), $product->state,  ['class' => 'form-control' . ($errors->has('state') ? ' is-invalid' : ''), 'placeholder' => '--Seleccione estado--']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{ Form::label('precio') }}
            {{ Form::number('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el precio']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{ Form::label('precio descuento') }}
            {{ Form::number('discount_price', $product->discount_price, ['class' => 'form-control' . ($errors->has('discount_price') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el precio de descuento']) }}
            {!! $errors->first('discount_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
        {{ Form::label('Imagen') }}
        
        @if(isset($product->image))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$product->image}}" alt="" width="100" height="100">
        @endif
        {{ Form::file('image', $product->image = array('class' => 'form-control'.($errors->has('image') ? ' is-invalid' : ''))) }}
        
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}  
        </div>
    </div>
    <div class="box-footer mt20 d-flex">
        <button type="submit"  class="btn btn-success">Crear</button>
        <div class="float-right "style='display: flex; margin-left: .5rem;'>
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Atras</a>
        </div>
    </div>
</div>