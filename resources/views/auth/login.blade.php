@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-10 col-md-6 col-lg-4 mx-auto">
            <h1 class="display-5 text-center mb-4">Iniciar Sesión</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="height:40px;"><i class="fa-solid fa-user text-muted"></i></span>
                    </div>
                    <input id="username" type="text" class="form-control shadow-none @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Ingrese su usuario">

                    @error('username')
                        <span class="invalid-feedback ps-5" role="alert">
                            <strong>*{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="height:40px;"><i class="fa-solid fa-unlock text-muted"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control shadow-none position-relative pr-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Ingrese su clave">
                    <span style="top:6px;right:10px;z-index:50;cursor:pointer" class="position-absolute"><i class="fa-solid fa-eye-slash text-muted"></i></span>

                    @error('password')
                        <span class="invalid-feedback ps-5" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <p class="text-right mb-4">
                    ¿Todavía no tiene una cuenta? <a href="register.php" class="text-dark text-decoration-none"><b>Registrar</b></a> 
                </p>

                <div class="d-flex justify-content-between align-items-center">
                    <button tyle="submit" class="btn btn-primary">Iniciar sesión</button>
                    <a href="#" class="text-dark">¿Olvidaste tu contraseña?</a>
                </div>

                <!-- <div class="botones row mb-3">
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
                </div> -->
            </form>
        </div>
    </div>
</div>
@endsection