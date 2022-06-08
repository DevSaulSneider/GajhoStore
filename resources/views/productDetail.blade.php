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
            <p class="lh-1 fw-bold fs-5">S/.{{$product->price}}</p>
            <p class="lh-1 fs-5">Cantidad</p>
            <form method="POST" action="{{ route('addToCart') }}">
                @csrf
                <input type="hidden" name="productId" value="{{$product->id}}">
                <input class="d-inline form-control" style="width: 70px" type="number" name="quantity" id="quantity" min="0" value="1">
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
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta molestias dolore eum dolor voluptatibus commodi, amet exercitationem laudantium quaerat optio quis delectus possimus fugiat aliquid odit, quidem temporibus aperiam reiciendis impedit, architecto ea velit quo. Facilis expedita tenetur quam suscipit?</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Política de devolución y retorno
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum id voluptatem quos minima perspiciatis nesciunt excepturi temporibus deleniti fugiat distinctio rem tempora dolore earum provident, aspernatur quasi a! Iusto rerum, unde ipsum culpa molestias quos accusantium beatae harum inventore molestiae.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Información de envío
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident fuga mollitia, quaerat quas dicta facilis cum, in repellat repudiandae quis libero accusamus, expedita facere. Rerum assumenda, quas itaque obcaecati consequuntur minus blanditiis dolor ex veniam repudiandae, doloremque molestias vero facere?</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection