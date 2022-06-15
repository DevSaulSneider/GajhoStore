@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="register_flex">
                            <div class="">
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>

                                    <div class="col-md-7">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="lastName" class="col-md-4 col-form-label text-md-end">Apellidos</label>

                                    <div class="col-md-7">
                                        <input id="lastName" type="text"
                                            class="form-control @error('lastName') is-invalid @enderror" name="lastName"
                                            value="{{ old('lastName') }}" autocomplete="lastName" autofocus>

                                        @error('lastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone" class="col-md-4 col-form-label text-md-end">Teléfono</label>

                                    <div class="col-md-7">
                                        <input id="phone" type="text"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone') }}" autocomplete="phone" autofocus>

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="department"
                                        class="col-md-4 col-form-label text-md-end">Departamento</label>
                                    <div class="col-md-7">
                                        <select name="department" id="department" class="form-select"
                                            onchange="fetchProvinces(this)"></select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="province" class="col-md-4 col-form-label text-md-end">Provincia</label>
                                    <div class="col-md-7">
                                        <select name="province" id="province" class="form-select"
                                            onchange="fetchDistricts(this)"></select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="district" class="col-md-4 col-form-label text-md-end">Distrito</label>
                                    <div class="col-md-7">
                                        <select name="district_id" id="district" class="form-select"></select>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="row mb-3">
                                    <label for="address" class="col-md-4 col-form-label text-md-end">Dirección</label>

                                    <div class="col-md-7">
                                        <input id="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ old('address') }}" autocomplete="address" autofocus>

                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="reference"
                                        class="col-md-4 col-form-label text-md-end">Referencia</label>

                                    <div class="col-md-7">
                                        <input id="reference" type="text"
                                            class="form-control @error('reference') is-invalid @enderror"
                                            name="reference" value="{{ old('reference') }}" autocomplete="reference"
                                            autofocus>

                                        @error('reference')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                    <div class="col-md-7">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <label for="username" class="col-md-4 col-form-label text-md-end">Nombre de
                                        usuario</label>

                                    <div class="col-md-7">
                                        <input id="username" type="text"
                                            class="form-control @error('username') is-invalid @enderror" name="username"
                                            value="{{ old('username') }}" autocomplete="username" autofocus>

                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                                    <div class="col-md-7">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmar
                                        contraseña</label>

                                    <div class="col-md-7">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-7 mb-1">
                                        <button type="submit" class="btn btn-primary">
                                            Registrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<option value=""></option>
<script>
    const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        fetch('/department').then(response => response.json()).then(data => {
            let departments = '';
            for (const department of data) {
                departments += `<option value="${department.id}">${department.name}</option>`
            }
            document.querySelector('#department').innerHTML = departments;
            document.querySelector('#department').value = "";
        });

    const fetchProvinces = (department) => {
        fetch('/provinces', {
            method: 'POST',
            body: JSON.stringify({
                id: department.value
            }),
            headers: {
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            }
        }).then(response => response.json()).then(data => {
            let provinces = '';
            for (const province of data) {
                provinces += `<option value="${province.id}">${province.name}</option>`
            }
            document.querySelector('#province').innerHTML = provinces;
            document.querySelector('#province').value = "";
            document.querySelector('#district').value = "";
        });
    }

    const fetchDistricts = (province) => {
        fetch('/districts', {
            method: 'POST',
            body: JSON.stringify({
                id: province.value
            }),
            headers: {
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            }
        }).then(response => response.json()).then(data => {
            let districts = '';
            for (const district of data) {
                districts += `<option value="${district.id}">${district.name}</option>`
            }
            document.querySelector('#district').innerHTML = districts;
            document.querySelector('#district').value = "";
        });
    }
</script>
@endsection