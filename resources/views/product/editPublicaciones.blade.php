@extends('layouts.app')

@section('content')

<main class="contenidos seccion">
    <h1 class="text-center mt-3 mb-3">Actualizar</h1>
    <picture>
        <img loading="lazy" src="{{ asset('image/menu/menu1.webp') }}" alt="">
    </picture>
    <h2 class="text-center mt-3 mb-3">Llene el formulario de Publicación</h2>
    <form action="{{ route('editarProduct')}}" method="POST" class="formulario" enctype="multipart/form-data"  role="form">
        @csrf
        <fieldset>
            <input type="hidden" name="id" value="{{$product->id}}">
            <legend>Información del Producto</legend>

            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" placeholder="Tu Nombre" @error('name') @enderror value="{{$product->name}}">
            <div class="error">
            @error('name')
                <p class="">{{ $message }}</p>
            @enderror
            </div>

            <label for="category_id">Categoria:</label>
            <select name="category_id" id="category_id" @error('category_id')  @enderror>
                <option value="" disabled selected>-- Seleccione --</option>
                @foreach ($category as $categories)
                    <option value="{{ $categories->id }}" {{ ($product->category_id == $categories->id)? "selected":""}}> {{ $categories->name}} </option>
                @endforeach
            </select>
            <div class="error">
                @error('category_id')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>

            <label for="description">Descripcion:</label>
            <textarea type="text" name="description" id="description" placeholder="Descripcion.." @error('description') @enderror">{{ $product->description}}</textarea>
            <div class="error">
                @error('description')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>

            <label for="quantity">Cantidad:</label>
            <input type="number" name="quantity" id="quantity" placeholder="Cantidad" @error('quantity') @enderror value="{{$product->quantity}}">
            <div class="error">
            @error('quantity')
                <p class="">{{ $message }}</p>
            @enderror
            </div>

            <label for="state">Estado:</label>
            <select name="state" id="state">
                <option disabled selected @error('state') @enderror >-- Seleccione --</option>
                <option value="S" {{ ($product->state == "S")? "selected":""}}>Usado</option>
                <option value="R" {{ ($product->state == "R")? "selected":""}}>Reparado</option>
            </select>
            <div class="error">
                @error('state')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>

            <label for="information">Información o características:</label>
            <textarea type="text" name="information" id="information" placeholder="Information.." @error('information') @enderror" >{{ $product->information}}</textarea>
                <div class="error">
                @error('information')
                    <p class="">{{ $message }}</p>
                @enderror
                </div>

            <label for="price">Precio:</label>
            <input type="number" name="price" id="price" placeholder="Precio" @error('price') @enderror value="{{ $product->price}}">
            <div class="error">
            @error('price')
                <p class="">{{ $message }}</p>
            @enderror
            </div>
  
            <label for="discount_price">Precio descuento: (Opcional)</label>
            <input type="number" name="discount_price" id="discount_price" placeholder="Precio descuento" value="{{ $product->discount_price}}">

            <label for="image">Imagen: </label>
            <input type="file" name="image" id="image" accept=".gif,.jpg,.jpeg,.png" @error('image') @enderror value="{{ $product->image}}">
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$product->image}}" alt="" style="width:300px;height:300px;margin:auto;object-fit:contain">
            <div class="error">
            @error('image')
                <p class="">{{ $message }}</p>
            @enderror
            </div>
        </fieldset>

       

        {{-- <fieldset>
            <legend>Contacto</legend>

            <p>¿Cómo desea ser Contactado?</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono:</label>
                <input type="radio" value="telefono" name="contacto" id="contactar-telefono">

                <label for="contactar-telefono">E-mail:</label>
                <input type="radio" value="email" name="contacto" id="contactar-email">
            </div>

            <p>Sí eligió Teléfono, elija la fecha y hora: </p>

            <label for="fecha">Fecha:</label>
            <input type="date" name="" id="fecha">

            <label for="hora">Hora:</label>
            <input type="time" name="" id="tel" min="09:00" max="18:00">
        </fieldset> --}}
        <input type="submit" value="Enviar" class="boton-amarillo">
    </form>

</main>

@endsection