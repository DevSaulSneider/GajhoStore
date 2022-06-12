@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="text-center text-uppercase p-2 mb-5 mt-4">Más Sobre Nosotros</h1>
        <main class="contenedor">
            <div class="contenido-nosotros">
                <div class="imagen">
                    <img src="{{ asset('image/menu/menu1.webp') }}" alt="">
                </div>
                <div class="texto-nosotros">
                    <blockquote class="text-center">Años de Experiencia</blockquote>
        
                    <p> Elite SAC es una empresa fundada en 1995 por Benito Antonio Martínez Ocasio. Cuenta con un local principal ubicado en la Av. Tacna 542 - Cercado de Lima. Además de sucursales en Arequipa, Huancayo, Trujillo y Chiclayo. La empresa se dedica a la venta de artículos de segunda mano. Ofrece una amplia selección en moda, electrónicos, vehículos, teléfonos, muebles para el hogar entre otros.</p>
        
                    <p> Hoy por hoy, ELITE sigue siendo reconocida y admirada por su capacidad de superar los embates del tiempo como ninguna otra compañía.</p>
                </div>
            </div>
        </main>
       
        <section class="section-mision text-center">
            <div class="section-mision-heigth">
                <p class="p-mision-tittle">Nuestra Misión</p>
                <span>Hacer que el comercio sea mejor para todos</span>
                <p class="p-mision">Nuestra misión es elevar continuamente el nivel de la experiencia del cliente mediante el uso de Internet y la tecnología, para ayudar a los consumidores a encontrar, descubrir, comprar cualquier cosa.
                    Elite tiene un claro enfoque dirigido a los usuarios, a quienes ofrece productos y servicios de una excelente calidad.
                </p>
            </div>
        </section>

        <section class="contenedor seccion">
            <div class="icono-nosotros">
                <div class="icono">
                    <img src="{{ asset('image/menu/Imagen1.svg') }}" alt="icono seguridad" loading="lazy">
                    <h3>Seguridad</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis inventore corporis dicta, ad facere magni, ipsa ab voluptatibus explicabo eveniet vel quasi repudiandae autem iste minus tempore, amet iusto voluptates!
                    </p>
                </div>
                <div class="icono">
                    <img src="{{ asset('image/menu/Imagen2.svg') }}" alt="icono precio" loading="lazy">
                    <h3>Precio</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis inventore corporis dicta, ad facere magni, ipsa ab voluptatibus explicabo eveniet vel quasi repudiandae autem iste minus tempore, amet iusto voluptates!
                    </p>
                </div>
                <div class="icono">
                    <img src="{{ asset('image/menu/Imagen3.svg') }}" alt="icono tiempo" loading="lazy">
                    <h3>A Tiempo</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis inventore corporis dicta, ad facere magni, ipsa ab voluptatibus explicabo eveniet vel quasi repudiandae autem iste minus tempore, amet iusto voluptates!
                    </p>
                </div>
            </div>
        </section>
    
        
        <section class="section-mision text-center">
            <div class="section-mision-heigth">
                <p class="p-mision-tittle">Nuestra Visión</p>
                <span>Hacer que el comercio sea mejor para todos</span>
                <p class="p-mision">Nuestra visión es ser una de las empresas de ventas online más conocidas en el rubro de electrodomésticos, muebles o moda, y hacer que los usuarios tengan más accesibilidad a nuestros productos desde la comodidad de su casa. 
                </p>
            </div>
        </section>
    </div>
@endsection