@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center h1">Mi Perfil</h1>
    <div>
        <h4>Consulta y edita tu información personal</h4>
        <hr>
        <h5>Actualiza y edita la información que compartes con la comunidad</h5>

        <p class="mb-0">Email de inicio de sesión:</p>
        <p>{{$userData->email}}</p>
        <p class="fs-6 text-secondary">Tu email de inicio de sesión no se puede cambiar</p>
    </div>
    <div>
        <form method="post" action="" style="min-width: 400px; max-width: 700px;">
        @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="reference" class="form-label">Referencia</label>
                        <input type="text" class="form-control" id="reference" name="reference">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection