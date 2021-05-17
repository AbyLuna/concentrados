
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Menu</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-white fondo-nav sticky-top">
            <div class="container">
                <img src="/img/cabecera.png"> 
                <a class="btn btn-outline-secondary" href="#">
                    <img src="/img/log.png" width="25" height="auto" />
                </a>
            </div>
        </nav>
        <div class="card-group">
            <div class="card">
               
                <a class="btn btn-outline-secondary" href="{{ route('cajas.index') }}">{{ __('Cajas') }}
                    <img src="/img/agregar1.png" width="280" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                        <h5> Ingreso de usuarios</h5>
                        <p>Registrto y actualizaciones de usuarios.</p>
                    </center>
                </div>
            </div>
            <div class="card">
            <a class="btn btn-outline-secondary" href="{{ route('cajas.index') }}">{{ __('Cajas') }}
                    <img src="/img/caja.png" width="280" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                        <h5>Registro</h5>
                        <p class="card-text"> Llenado de formularios para el registro de cajas y tomos</p>
                    </center>
                </div>
            </div>
            <div class="card">
            <a class="nav-link" href="{{ route('expedientes.index') }}">{{ __('Expedientes') }}
                    <img src="/img/caja.png" width="280" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                        <h5>Contrato</h5>
                        <p class="card-text"> Llenado de formularios para el registro de cajas y tomos</p>
                    </center>
                </div>
            </div>
            <div class="card">
                 <a class="nav-link" href="{{ route('reporte') }}">{{ __('Reporte') }}
                    <img src="/img/rep.png" width="280" height="auto" />
                </a>
                <div class="card-body">
                    <center>
                        <h5>Reportes</h5>
                        <p class="card-text">Reportes de ...</p>
                    </center>
                </div>
            </div>
        </div>
      </div>
      </div>
      <div class="card-footer">
        <small class="text-muted">Derechos reservados TI @</small>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>