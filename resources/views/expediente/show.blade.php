@extends('layouts.app')

@section('template_title')
    {{ $expediente->name ?? 'Show Expediente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Expediente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('expedientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Número de serie:</strong>
                            {{ $expediente->numSerie }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha apertura:</strong>
                            {{ $expediente->fechaApertura }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha cierre:</strong>
                            {{ $expediente->fechaCierre }}
                        </div>
                        <div class="form-group">
                            <strong>Valor documental Id:</strong>
                            {{ $expediente->valorDocumental_id }}
                        </div>
                        <div class="form-group">
                            <strong>Valor informacion Id:</strong>
                            {{ $expediente->valorInformacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vigencia concentracion Id:</strong>
                            {{ $expediente->vigConcentracion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vigencia tramite Id:</strong>
                            {{ $expediente->vigTramite_id }}
                        </div>
                        <div class="form-group">
                            <strong>Total vigencia:</strong>
                            {{ $expediente->totalVigencia }}
                        </div>
                        <div class="form-group">
                            <strong>Destino final Id:</strong>
                            {{ $expediente->destinoFinal_id }}
                        </div>
                        <div class="form-group">
                            <strong>Signatura:</strong>
                            {{ $expediente->signatura }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicación Id:</strong>
                            {{ $expediente->location_id }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $expediente->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
