@extends('layouts.app')

@section('template_title')
    {{ $expediente->name ?? 'Ver Expediente' }}
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
                            <a class="btn btn-primary" href="{{ route('expedientes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de la serie:</strong>
                            {{ $expediente->numSerie }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $expediente->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de apertura:</strong>
                            {{ $expediente->fechaApertura }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de cierre:</strong>
                            {{ $expediente->fechaCierre }}
                        </div>
                        <div class="form-group">
                            <strong>Valor documental :</strong>
                            {{ $expediente->valorDocumental_id }}
                        </div>
                        <div class="form-group">
                            <strong>Valor de la información:</strong>
                            {{ $expediente->valorInformacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vigencia de concentración:</strong>
                            {{ $expediente->vigConcentracion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vigencia de tramite:</strong>
                            {{ $expediente->vigTramite_id }}
                        </div>
                        <div class="form-group">
                            <strong>Total de vigencia del expediente:</strong>
                            {{ $expediente->totalVigencia }}
                        </div>
                        <div class="form-group">
                            <strong>Destino final del expediente:</strong>
                            {{ $expediente->destinoFinal_id }}
                        </div>
                        <div class="form-group">
                            <strong>Signatura:</strong>
                            {{ $expediente->signatura }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicación física del expediente:</strong>
                            {{ $expediente->location_id }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $expediente->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Contrato Id:</strong>
                            {{ $expediente->contrato_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
