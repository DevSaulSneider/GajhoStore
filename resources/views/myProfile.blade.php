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
        <form method="post" action="{{route('updateProfile')}}" style="min-width: 400px; max-width: 700px;">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$userData->address}}">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="reference" class="form-label">Referencia</label>
                        <input type="text" class="form-control" id="reference" name="reference"value="{{$userData->reference}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$userData->phone}}">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$userData->name}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="department">Departamento</label>
                        <select name="department" id="department" class="form-select" onchange="fetchProvinces(this)"></select>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="province">Provincia</label>
                        <select name="province" id="province" class="form-select" onchange="fetchDistricts(this)"></select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="district">Distrito</label>
                        <select name="district_id" id="district" class="form-select"></select>
                    </div>
                </div>
                <div class="col">
                    <input type="hidden" name="id" value="{{auth()->id()}}">
                </div>
            </div>
            <div class="mt-4">
                <input class="mx-auto btn btn-outline-primary" type="submit" value="Guardar Cambios">
            </div>
        </form>
    </div>
</div>

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