
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu de inicio</title>
</head>
<body>
    <div class="container pt-0">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container"> 
            <img src="/img/cabecera.png" width="555" height="auto"> 
            @guest
                            @if (Route::has('login')) 
                             <li>
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                             </li>
                            @endif
                            <li>
                            @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>     
                            @endif
                        @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="/img/azul.png" width="35" height="auto"> 
                                    {{ Auth::user()->name }}   
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar seción') }}
                                    </a>
                                
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
        </div>
    </nav>
<br>
        <div class="card-group">
        <div class="card">
                <a class="btn btn-outline-secondary" href="{{ route('cajas.index') }}">
                    <img src="/img/caja.png" width="270" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                        <h4> <strong>Cajas</strong></h4>
                        <p class="card-text">Módulo del llenado de cajas y expedientes </p>
                    </center>
                </div>
            </div>
            <div class="card">
                <a class="btn btn-outline-secondary" href="{{ route('registros.index') }}">
                    <img src="/img/122.png" width="270" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                    <h4> <strong>Vale de prestamos de expedientes</strong></h4>
                        <p>Módulo de registro e impresion de vale de prestamo.</p>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2021 Derechos reservados Departamento de Tecnologías de la Información
    <script src="{{ asset('js/app.js') }}"></script>
</body>

  