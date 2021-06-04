@extends('layouts.app')
@section('content')

<body>
    <div class="container">
        <div class="card-group">
        <div class="card">
                <a class="btn btn-outline-secondary" href="{{ route('cajas.index') }}">
                    <img src="/img/caja.png" width="180" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                        <h5>Registro de Cajas</h5>
                        <p class="card-text"> Llenado de formularios para el registro de cajas y tomos</p>
                    </center>
                </div>
            </div>
            <div class="card">
                <a class="btn btn-outline-secondary" href="{{ route('expedientes.index') }}">
                    <img src="/img/tomo.png" width="180" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                        <h5>Expedientes</h5>
                        <p class="card-text"> Llenado de formularios para el registro de cajas y tomos</p>
                    </center>
                </div>
            </div>
            <div class="card">
                <a class="btn btn-outline-secondary" href="{{ route('portada') }}">
                    <img src="/img/rep.png" width="180" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                        <h5>Portada de caja</h5>
                        <p class="card-text"> Llenado de formularios para el registro de cajas y tomos</p>
                    </center>
                </div>
            </div>
            <div class="card">
                <a class="btn btn-outline-secondary" href="{{ route('registros.index') }}">
                    <img src="/img/reportes.png" width="197" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                        <h5>Vale de Prestamo </h5>
                        <p>Modulo de registro e impresion de vale de prestamo.</p>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <small class="text-muted">Derechos reservados TI @</small>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
@endsection