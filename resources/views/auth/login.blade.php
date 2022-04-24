@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Iniciar sesión</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="nombre row mb-3">
                            <label for="username" class="col-md-4 col-form-labels text-md-end">Nombre de usuario</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="contraseña row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- 
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Recuérdame
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="botones row mb-3">
                            <div class="mt-4 offset-md-4">
                                <button type="submit" class="inicio">
                                    {{ __('Iniciar sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="olvidaste btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu contraseña?
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .col-md-8 {
        position: absolute;
        padding-top: 80px;
        width: 700px;
    }

    .card {
        height: 350px;
        box-shadow: 0px 0px 80px rgba(0, 0, 0, 0.50);
    }

    .card-header{
        background-color: #9562E9;
    }

    .nombre {
        padding-top: 37px;
    }

    .contraseña {
        padding-top: 5px;
    }

    .botones {
        position: relative;
        bottom: 10px;
        width: 500px;
    }

    .inicio {
        background-color: rgb(58, 131, 239);
        border: none;
        color: white;
        font-size: 15px;
        font-family: 'Spectral', serif;
        text-decoration: none;
        padding: 10px 15px;
        margin: auto;
        border-radius: 50px;
    }

    .inicio:hover {
        background-color: rgb(38, 87, 159);
        font-size: 17px;
        box-shadow: 0px 0px 20px rgb(58, 131, 239);
        transition: font-size 0.10s;
    }
</style>
@endsection