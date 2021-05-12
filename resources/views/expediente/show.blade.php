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
                            <strong>Numserie:</strong>
                            {{ $expediente->numSerie }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaapertura:</strong>
                            {{ $expediente->fechaApertura }}
                        </div>
                        <div class="form-group">
                            <strong>Fechacierre:</strong>
                            {{ $expediente->fechaCierre }}
                        </div>
                        <div class="form-group">
                            <strong>Valordocumental Id:</strong>
                            {{ $expediente->valorDocumental_id }}
                        </div>
                        <div class="form-group">
                            <strong>Valorinformacion Id:</strong>
                            {{ $expediente->valorInformacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vigconcentracion Id:</strong>
                            {{ $expediente->vigConcentracion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vigtramite Id:</strong>
                            {{ $expediente->vigTramite_id }}
                        </div>
                        <div class="form-group">
                            <strong>Totalvigencia:</strong>
                            {{ $expediente->totalVigencia }}
                        </div>
                        <div class="form-group">
                            <strong>Destinofinal Id:</strong>
                            {{ $expediente->destinoFinal_id }}
                        </div>
                        <div class="form-group">
                            <strong>Signatura:</strong>
                            {{ $expediente->signatura }}
                        </div>
                        <div class="form-group">
                            <strong>Location Id:</strong>
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
