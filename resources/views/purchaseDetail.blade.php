@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">Detalle de Compra</h1>
    <br>
    <div class="d-flex justify-content-evenly">
        <div style="width: 40%;">
            <ul id="products" class="list-group list-group-flush"></ul>
        </div>
        <div style="width: 20%;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item fs-5">Resumen del pedido</li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <span class="fs-5 fw-bold">Total</span> <span class="fs-5 fw-bold" id="total">S/. 0</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<template id="template-product">
    <li class="list-group-item">
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <img class="img-thumbnail" src="#" alt="thumbnail-product" style="width: 90px; height: 90px; margin-right:20px;">
                <div>
                    <h5 id="productName">Nombre</h5>
                    <h5 id="productPrice">Precio</h5>
                    <input id="productQuantity" data-id="" class="form-control form-control-sm" type="number" value="cantidad" style="width: 70px;" min="1">
                </div>
            </div>
            <button id="deleteProduct" data-id="" class="bg-white border-0">
                <i class="fa-solid fa-xmark fa-lg pt-2"></i>
            </button>
        </div>
    </li>
</template>

@push('script')
<script>
    const products = document.getElementById('products');
    const templateProduct = document.getElementById('template-product').content;
    const fragment = document.createDocumentFragment();

    document.addEventListener('DOMContentLoaded', () => {
        fetchCarrito();
    });

    document.addEventListener('change', e => {
        updateQuantity(e);
    })
    document.addEventListener('click', e => {
        deleteProduct(e);
    })

    window.addEventListener('beforeunload', event => {
        updateCarrito();
    });

    let data;

    const fetchCarrito = async () => {
        const res = await fetch('/purchaseDetailJson');
        data = await res.json();
        printProducts(data, null);

        calculateTotal();
    }

    const printProducts = (data, type) => {
        data.forEach(product => {
            templateProduct.getElementById('productName').textContent = product.name;
            templateProduct.getElementById('productPrice').textContent = 'S/. ' + product.price;
            templateProduct.querySelector('.img-thumbnail').setAttribute('src', 'storage/' + product.image);
            templateProduct.getElementById('productQuantity').setAttribute('value', product.quantity);
            templateProduct.getElementById('productQuantity').dataset.id = product.id;
            templateProduct.getElementById('deleteProduct').dataset.id = product.id;

            const clone = templateProduct.cloneNode(true);

            fragment.appendChild(clone);

        });

        if (type != 'delete') {
            products.appendChild(fragment);
        } else {
            products.textContent = '';
            products.appendChild(fragment);
        }
    }

    const updateQuantity = (e) => {
        if (e.target.id = 'productQuantity') {
            const product = data.find(product => product.id == e.target.dataset.id);
            product.quantity = parseInt(e.target.value);
            product.subtotal = product.quantity * product.price
            calculateTotal();
        }
    }

    const calculateTotal = () => {
        const total = data.reduce((accu, product) => {
            return accu + product.subtotal
        }, 0);
        document.getElementById('total').textContent = 'S/. ' + total;
    }

    const deleteProduct = async (e) => {
        if (e.target.parentElement.id == 'deleteProduct') {
            console.log(e.target.parentElement.dataset.id);
            const index = data.findIndex(product => product.id == e.target.parentElement.dataset.id);
            data.splice(index, 1);
            printProducts(data, 'delete');
            calculateTotal();
            await fetch(`deleteFromPurchaseDetail/${e.target.parentElement.dataset.id}`, {
            method: 'DELETE',
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
            },
        });
        }
    }

    const updateCarrito = async () => {
        const res = await fetch('updatePurchaseDetail', {
            method: 'PUT',
            headers: {
                "Content-Type": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
            },
            body: JSON.stringify(data)
        });
    }
</script>
@endpush
@endsection