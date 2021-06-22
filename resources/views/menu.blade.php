@extends('layouts.app')
@section('content')

<body>
    <div class="container">
        <div class="card-group">
        <div class="card">
                <a class="btn btn-outline-secondary" href="{{ route('cajas.index') }}">
                    <img src="/img/caja.png" width="275" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                        <h3> <strong>Cajas</strong></h3>
                        <p class="card-text">Modulo del llenado de cajas y expedientes </p>
                    </center>
                </div>
            </div>
            <div class="card">
                <a class="btn btn-outline-secondary" href="/portada">
                    <img src="/img/rep.png" width="275" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                        <h3> <strong>Portada de la caja</strong></h3>
                        <p class="card-text"> Modulo de impresion de portada para la caja</p>
                    </center>
                </div>
            </div>
            <div class="card">
                <a class="btn btn-outline-secondary" href="{{ route('registros.index') }}">
                    <img src="/img/122.png" width="275" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                    <h3> <strong>Vale de prestamos de expedientes</strong></h3>
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