@extends('layouts.app')

@section('template_title')
{{ $product->name ?? 'Mostrar Producto' }}
@endsection

@section('content')
<section class="content container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Mostrar Producto</span>
                    </div>

                </div>

                <div class="card-body">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('products.index') }}"> Atras</a>
                    </div> <br>

                    <div class="d-flex">
                        <div class="form-group me-4">
                            <strong>Imagen:</strong><br>
                            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$product->image}}" alt="" width="250" height="100">
                        </div>

                        <div>
                            <div class="form-group">
                                <strong>Categoria:</strong>
                                <?php if($product->category_id == 1){
                                    echo "Joyeria";
                                }else if($product->category_id == 2){
                                    echo "Prendas";
                                }else if($product->category_id == 3){
                                    echo "Accesorios";
                                } ?>
                            </div>
                            <div class="form-group">
                                <strong>Producto:</strong>
                                {{ $product->name }}
                            </div>
                            <div class="form-group">
                                <strong>Descripcion:</strong>
                                {{ $product->description }}
                            </div>
                            <div class="form-group">
                                <strong>Cantidad:</strong>
                                {{ $product->quantity }} u.
                            </div>
                            <div class="form-group">
                                <strong>Precio:</strong>
                                S/. {{ $product->price }}
                            </div>
                            <div class="form-group">
                                <strong>Precio Descuento:</strong>
                                S/. {{ $product->discount_price }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection