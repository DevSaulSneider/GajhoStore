@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="row justify-content-center">Finalizar Compra</h1>
    <div class="container">
        <form action="{{route('finish-purchase')}}" method="GET">
            <div>
                <div style="margin-left: 310px;">
                    <li class="d-inline">Metodo de Pago</li>
                    <li id="label" class="d-none" style="margin-left: 262px;">Código de cuenta</li>
                </div>
                <div class="d-inline d-flex w-100" style="margin-left: 310px;">
                    <select class="form-control w-25" onchange="alterOptions(this.value)">
                        @foreach($methods as $method)
                        <option value="{{$method->name}}">{{$method->name}}</option>
                        @endforeach
                    </select>
                    <input id="codigo" class="d-none" style="margin-left: 54px;  width: 320px;" type="text" placeholder="Ingrese su código" />
                    <!-- <div id="phone" class="ms-5">
                        <h5 class="fw-bolder text-primary">Pagar al: 999999999</h5>
                    </div> -->
                </div>
            </div>
            <br>
            <div id="cvv" class="d-none">
                <div style="margin-left: 310px;">
                    <li class="d-inline">Código CCV</li>
                    <li class="d-inline" style="margin-left: 292px;">Confirmar CCV</li>
                </div>
                <div style="margin-left: 310px;">
                    <input class="form-control d-inline" style="width: 320px;" type="text" placeholder="Ingrese su código" />
                    <input class="form-control d-inline" style="margin-left: 50px; width:320px;" type="text" placeholder="Confirme su código" />
                </div>
            </div>
            <br>
            <!-- <div>
                <div style="margin-left: 310px;">
                    <li class="d-inline">Departamento</li>
                    <li class="d-inline" style="margin-left: 278px;">Provincia</li>
                </div>
                <div class="d-inline d-flex">
                    <div style="margin-left: 310px; width:320px;">
                        <select name="department" id="department" class="form-select" onchange="fetchProvinces(this)"></select>
                    </div>
                    <div style="margin-left: 55px; width:550px;" class="flex-shrink-1">
                        <div class="col-md-7">
                            <select name="province" id="province" class="form-select" onchange="fetchDistricts(this)"></select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-inline">
                <div style="margin-left: 310px;">
                    <li class="d-inline">Distrito</li>
                    <li class="d-inline" style="margin-left: 325px;">Dirección</li>
                </div>
                <div class="d-flex" style="margin-left: 310px;">
                    <div class="col-md-7 flex-shrink-1" style="width:320px;">
                        <select name="district_id" id="district" class="form-select"></select>
                    </div>
                    <input class="form-control d-inline" style="margin-left: 58px; width:315px;" type="text" placeholder="Ingrese su dirección" />
                </div>
            </div> -->
            <br>
            <div>
                <div style="margin-left: 310px;">
                    <li class="d-inline">Referencia</li>
                </div>
                <div style="margin-left: 310px;">
                    <input class="form-control" style="width: 695px;" type="text" />
                </div>
            </div>
            <br>
            <div>
                <li style="margin-left: 310px;" class="d-inline">Total : </li>
                <li class="d-inline" name="total">S/ .{{$total}}</li>
            </div>
            <br>
            <button class="btn btn-primary" style="margin-left: 310px;">Finalizar</button>
        </form>
    </div>
</div>
<script>
    window.onload=() => {
        alterOptions('Visa');
    }
    const alterOptions = (selected) => {
        if (selected === 'Visa' || selected === 'Mastercard') {
            
            document.getElementById('cvv').setAttribute('class', '')
            document.getElementById('codigo').setAttribute('class', 'form-control')
            document.getElementById('label').setAttribute('class', 'd-inline')
            document.getElementById('phone').setAttribute('class', 'd-none')
        }
        
    }

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
<style>
    body::-webkit-scrollbar {
        width: 10px;
    }

    body::-webkit-scrollbar-thumb {
        border-radius: 50px;
        border-style: solid;
        background: #741efe;
    }
</style>

@endsection