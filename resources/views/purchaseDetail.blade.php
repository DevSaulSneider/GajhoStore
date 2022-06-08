@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">Detalle de Compra</h1>
    <br>
    <div class="d-flex justify-content-evenly">
        <div style="width: 40%;">
            <ul class="list-group list-group-flush">
                @foreach ($cartProducts as $product)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <img class="img-thumbnail" src="{{ asset('storage').'/'.$product->image }}" alt="thumbnail-product" style="width: 90px; height: 90px; margin-right:20px;">
                            <div>
                                <h5>{{$product->name}}</h6>
                                    <h5>S/.{{number_format($product->price, 2)}}</h5>
                                    <input class="form-control form-control-sm" type="number" value="{{$product->quantity}}" style="width: 70px;" min="1">
                            </div>
                        </div>
                        <form method="post" action="{{route('deleteFromCart')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id}}">
                            <button type="submit" class="bg-white border-0">
                                <i class="fa-solid fa-xmark fa-lg pt-2"></i>
                            </button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div style="width: 20%;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item fs-5">Resumen del pedido</li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <span>Subtotal</span> <span>S/.240</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <span>Total</span> <span>S/.240</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection