@extends('layouts.app')

@section('template_title')
    {{ $contrato->name ?? 'Show Contrato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contrato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contratos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Número de contrato:</strong>
                            {{ $contrato->numContrato }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $contrato->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Número de tomos del expediente:</strong>
                            {{ $contrato->numTomosExp }}
                        </div>
                        <div class="form-group">
                            <strong>Bitácora:</strong>
                            {{ $contrato->bitacora }}
                        </div>
                        <div class="form-group">
                            <strong>Expediente Id:</strong>
                            {{ $contrato->expediente_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
