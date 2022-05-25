<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="icon" type="image/png" href="{{URL::asset('/image/logo-elite.png')}}">
  </link>

  <title>Elite</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
 
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-light parent">
      <div class="container">
        <div class="navbar-nav">
          <a href="{{ url('/index') }}">
            <img src="{{URL::asset('/image/logo-elite.png')}}" alt="logo" class="me-2">
          </a>
          <a class="navbar-brand fs-1" href="{{ url('/index') }}">
            Elite
          </a>
        </div>

        <div class="searchbar parent">
          <form class="d-flex">
            <input class="form-control rounded-pill" type="search" placeholder="Buscar" aria-label="Search">
            <button class="child btn btn-outline-success button-rounded-right button-color" type="submit">Buscar</button>
          </form>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fa-solid fa-circle-user fa-xl"></i> &nbsp; {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Cerrar sesion') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    <div class="categories">
      <ul class="container nav">
        <li class="nav-item">
          <a class="nav-link category" href="{{ route('products.index') }}">{{ __('Productos') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link category" href="{{ route('category.index') }}">{{ __('Categorias') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link category" href="{{ route('employee.index') }}">{{ __('Empleados') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link category" href="{{ route('payment-methods.index') }}">{{ __('Metodo de Pago') }}</a>
        </li>
      </ul>
    </div>

    <main class="py-4">
      @yield('content')
    </main>
    <div class="bg-white p-4">
      <div class="container">
        <div class="d-flex justify-content-between my-4">
          <div>
            <h3>Ubicacion de la tienda</h3>
            <p class="mb-4">Av. Tacna #542 Cercado de Lima, Perú</p>
            <div class="d-flex justify-content-evenly">
              <a href="#" class="text-dark"><i class="fa-brands fa-facebook-f fa-xl"></i></a>
              <a href="#" class="text-dark"><i class="fa-brands fa-instagram fa-xl"></i></a>
              <a href="#" class="text-dark"><i class="fa-brands fa-twitter fa-xl"></i></a>
              <a href="#" class="text-dark"><i class="fa-brands fa-youtube fa-xl"></i></a>
            </div>
          </div>
          <div>
            <h3>Tienda</h3>
            <ul>
              <li><a href="#">Comprar todo</a></li>
              <li><a href="#">Computadoras</a></li>
              <li><a href="#">Tablets</a></li>
              <li><a href="#">Drones y cámaras</a></li>
              <li><a href="#">Audio</a></li>
              <li><a href="#">Móvil</a></li>
              <li><a href="#">Televisores</a></li>
              <li><a href="#">Tecnología portátil</a></li>
              <li><a href="#">Oferta</a></li>
            </ul>
          </div>
          <div>
            <h3>Atencion al cliente</h3>
            <ul>
              <li><a href="#">Contáctenos</a></li>
              <li><a href="#">Centro de ayuda</a></li>
              <li><a href="#">Sobre nosotros</a></li>
            </ul>
          </div>
          <div>
            <h3>Politica</h3>
            <ul>
              <li><a href="#">Envio y devoluciones</a></li>
              <li><a href="#">Términos y condiciones</a></li>
              <li><a href="#">Métodos de pago</a></li>
              <li><a href="#">Preguntas más frecuentes</a></li>
            </ul>
          </div>
        </div>
        <div>
          <h5 class="text-center">Aceptamos los Siguientes métodos de pago</h5>
          <div class="d-flex justify-content-center my-4">
            <img class="mx-3" src="{{URL::asset('/image/payment_methods/yape-logo.png')}}" alt="">
            <img class="mx-3" src="{{URL::asset('/image/payment_methods/plin-logo.png')}}" alt="">
            <img class="mx-3" src="{{URL::asset('/image/payment_methods/agora-logo.png')}}" alt="">
            <img class="mx-3" src="{{URL::asset('/image/payment_methods/visa-logo.png')}}" alt="">
            <img class="mx-3" src="{{URL::asset('/image/payment_methods/mastercard-logo.png')}}" alt="">
          </div>
          <h6 class="text-center my-4">© Derechos reservados por Elite SAC.</h6>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<style>
  .categories {
    background-color: rgb(237, 236, 236);
  }

  .category {
    color: black;
  }

  .category:hover {
    color: rgb(116, 30, 254);
  }

  .searchbar {
    width: 350px;
    margin-left: 50px;
  }

  .searchbar input {
    background-color: rgb(237, 236, 236)
  }

  .parent {
    position: relative;
  }

  .child {
    position: absolute;
    right: 0;
  }

  .button-rounded-right {
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }

  .button-color {
    background-color: rgb(116, 30, 254);
    color: white;
    border: 1px solid rgb(116, 30, 254);
  }

  .button-color:hover {
    background-color: black;
    color: white;
    border: 1px solid black;
  }

  ul {
    padding: 0;
  }

  li {
    list-style: none;
  }

  li>a {
    text-decoration: none;
    color: black;
  }
/* 
  @media screen and (max-width: 768px) {
    .content {
      flex-direction: column;
    }
    .sidebar {
      width: 100%;
    }

    .catalogue {
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 10px !important;
    }
    .sidebar {
      width: 250px !important;
    }
  }

  @media screen and (min-width: 768px) {
    .catalogue {
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 10px !important;
    }
    .sidebar {
      width: 250px !important;
    }
  }

  @media screen and (min-width: 992px) {
    .catalogue {
      grid-template-columns: repeat(3, 1fr) !important;
      gap: 10px !important;
    }
    .sidebar {
      width: 250px !important;
    }
  }

  @media screen and (min-width: 1400px) {
    .catalogue {
      grid-template-columns: repeat(4, 1fr) !important;
      gap: 20px !important;
    }
  } */
</style>