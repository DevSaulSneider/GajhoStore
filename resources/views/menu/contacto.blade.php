@extends('layouts.app')

@section('content')
<div class="container mt-4">
        <h1 class="h1 text-center">Contáctese con nosotros</h1>
        <div class="d-flex align-items-start mx-auto mt-4" style="width:50rem">
            <div style="width:18rem">
                <h4 class="h4">Horario de atención</h4>
                <span>Lun - Vie: 8am - 8pm</span><br>
                <span>Sábado: 9am - 7pm</span><br>
                <span>Domingo: 9am - 8pm</span>

                <h4 class="h4 mt-4">Ubícanos en</h4>
                <span>Av. Tacna #542 Cercado</span><br>
                <span>de Lima, Perú</span><br><br>
                <p>info@mysite.com <br> 123-456-7890</p>
            </div>
            <div style="width:32rem">
                <h4 class="h4">¡Estamos aquí para ayudarte!</h4>
                <span>Rellene el siguiente formulario y nos pondremos</span><br>
                <span>en contacto con usted lo mas antes posible</span><br>

                <form action="" method="post" class="mt-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 border-0 border border-bottom border-dark border-2">
                                <label for="exampleInputEmail1">Correo: </label>
                                <input type="email" class="form-control shadow-none border-0">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 border-0 border border-bottom border-dark border-2">
                                <label for="exampleInputEmail1">Sujeto: </label>
                                <input type="email" class="form-control shadow-none border-0">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 border-0 border border-bottom border-dark border-2">
                                <label for="exampleInputEmail1">Nombre: </label>
                                <input type="email" class="form-control shadow-none border-0">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 border-0 border border-bottom border-dark border-2">
                                <label for="exampleInputEmail1">apellido: </label>
                                <input type="email" class="form-control shadow-none border-0">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3 border-0 border border-bottom border-dark border-2">
                                <label for="exampleInputEmail1">Mensaje: </label>
                                <input type="email" class="form-control shadow-none border-0">
                            </div>
                        </div>
                        <button type="submit" class="col-auto ms-2 btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection