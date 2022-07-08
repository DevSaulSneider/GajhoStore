@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="h1 text-center">Centro de ayuda</h1>

    <div class="row">
        <div class="col-12 px-5">
            <h3 class="h3">Pregunta más frecuentes</h3>
        </div>

        <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
            <div class="col-12 px-3">
                <div class="accordion-item border border-0">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="fw-bold accordion-button shadow-none bg-light text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            ¿Protección del pago?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus ad tempora eaque excepturi. Tempora quod illo nobis quibusdam, placeat nihil, modi totam maiores similique non sapiente, veniam obcaecati saepe nostrum. Facere cum reiciendis odio quis animi sunt, consequuntur rem officia error amet natus beatae laboriosam praesentium molestiae obcaecati? Odio id assumenda culpa corporis deserunt sed maxime tempore. Porro quos incidunt cum vero dolor quas praesentium dolorem delectus magnam! Laborum quas maiores aliquid repellendus natus, molestiae doloribus ut. Commodi error repudiandae nesciunt eum alias sapiente fugiat odit sit sed voluptatibus amet dolorem ratione optio ut neque eveniet sunt, officiis, nostrum magnam?
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-3">
                <div class="accordion-item border border-0">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="fw-bold accordion-button collapsed shadow-none bg-light text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            ¿Devoluciones?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus ad tempora eaque excepturi. Tempora quod illo nobis quibusdam, placeat nihil, modi totam maiores similique non sapiente, veniam obcaecati saepe nostrum. Facere cum reiciendis odio quis animi sunt, consequuntur rem officia error amet natus beatae laboriosam praesentium molestiae obcaecati? Odio id assumenda culpa corporis deserunt sed maxime tempore. Porro quos incidunt cum vero dolor quas praesentium dolorem delectus magnam! Laborum quas maiores aliquid repellendus natus, molestiae doloribus ut. Commodi error repudiandae nesciunt eum alias sapiente fugiat odit sit sed voluptatibus amet dolorem ratione optio ut neque eveniet sunt, officiis, nostrum magnam?
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-3">
                <div class="accordion-item border border-0">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="fw-bold accordion-button collapsed shadow-none bg-light text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            ¿Cómo publicar un producto?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus ad tempora eaque excepturi. Tempora quod illo nobis quibusdam, placeat nihil, modi totam maiores similique non sapiente, veniam obcaecati saepe nostrum. Facere cum reiciendis odio quis animi sunt, consequuntur rem officia error amet natus beatae laboriosam praesentium molestiae obcaecati? Odio id assumenda culpa corporis deserunt sed maxime tempore. Porro quos incidunt cum vero dolor quas praesentium dolorem delectus magnam! Laborum quas maiores aliquid repellendus natus, molestiae doloribus ut. Commodi error repudiandae nesciunt eum alias sapiente fugiat odit sit sed voluptatibus amet dolorem ratione optio ut neque eveniet sunt, officiis, nostrum magnam?
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-3">
                <div class="accordion-item border border-0">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="fw-bold accordion-button collapsed shadow-none bg-light text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            ¿Dónde puedo ver los productos que he comprado?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <p>Para ver todos los productos que has comprado dirigete a la parte superior a la derecha de la pantalla > click en el menu desplegable > Ver Historial</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection