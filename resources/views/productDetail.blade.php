@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">{{$product->name}}</h1>
    <br>
    <div class="d-flex justify-content-evenly">
        <img class="img-thumbnail" style="width: 350px !important; height: 350px !important;" src="{{ asset('storage').'/'.$product->image }}" alt="{{$product->name}}">
        <div class="w-50">
            <p class="lh-1 fw-bold">{{$product->description}}</p>
            <p class="lh-1">Id: {{$product->id}}</p>

            <p class="fs-5 text-success">S/<span>{{$product->price}}</span></p>
            <p class="lh-1 fw-bold fs-5 text-primary">
                {{($product->state == 'S') ? 'Segunda mano' : 'Reparado'}}
            </p>
            <p class="lh-1 fs-5">Cantidad</p>
            <form method="POST" action="{{ route('addToCart') }}">
                @csrf
                <input type="hidden" name="productId" value="{{$product->id}}">
                <input class="d-inline form-control" style="width: 70px" type="number" name="quantity" id="quantity" min="1" value="1" max="{{$product->quantity}}">
                <button class="btn btn-primary ms-2" type="submit"> Añadir al carrito </button>
            </form>
            <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Información
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{$product->information}}</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Política de devolución y retorno
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Elite sac. es una tienda conocida por los bajos precios que ofrece en todo tipo de productos, 
                            en su mayoría. Podemos comprar desde teléfonos móviles hasta bolígrafos baratos, pero es posible que hayas hecho una compra que quieras devolver porque es errónea, no te gusta, 
                            está roto, no funciona. ¿Se puede? ¿Cómo son las devoluciones y qué requisitos hay?
                            Es posible que te pierdas un poco entre las opciones que tienes ya que al ser productos baratos puede que pienses que no tienes derechos o que no te van a hacer caso, 
                            o puede quizá que los envíos de devolución sean más costosos que el propio producto y no te compense.
                            Antes de hablar sobre las devoluciones conviene que tengas en cuenta que no es lo mismo devolver un pedido que solicitar un reembolso porque no lo has recibido, 
                            como es lógico. En la mayoría de los casos te recomendamos que pagues con plataformas de pago seguras como pueden ser Visa, Mastercard, Yape, Plin, Agora que nos garantizan 
                            protección de compra si lo que recibimos no se parece a lo que hemos pedido o si lo que recibimos llega en mal estado, roto, no funciona.
                            En caso de fallar la protección, tenemos una protección adicional. Pero sea como sea, te explicamos qué pasos debemos seguir directamente en la tienda 
                            independientemente del método de pago que hayas utilizado para la compra.
                            Si no has recibido tu pedido debes, lo primero, mirar la dirección o el enlace para conocer el estado del mismo.
                            Podemos ir a la página web, vamos a la esquina superior derecha de la pantalla y desplegamos el apartado “Mi cuenta”.
                            Iniciado sesión con nuestros datos y vamos a “Mis pedidos”. Aquí, podemos buscar el pedido que nos interesa y buscar el enlace de seguimiento correspondiente.
                            Aquí verás si está en reparto, si va con retraso, etc.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Información de envío
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>1. Tendrás la entrega de pedido entre 3 y 5 días.</p>
                            <p>2. Todos tus paquetes están asegurados.</p>
                            <p>3. El envio sera gratis para pedidos superiores a S/1200.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection