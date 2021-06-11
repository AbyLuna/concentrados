@extends('layouts.app')

@section('template_title')
    {{ $contrato->name ?? 'Ver Contrato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Contrato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contratos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>No. de Contrato:</strong>
                            {{ $contrato->numContrato }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $contrato->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>No. de tomos del expediente:</strong>
                            {{ $contrato->numTomosExp }}
                        </div>
                        <div class="form-group">
                            <strong>Bitácora:</strong>
                            {{ $contrato->bitacora }}
                        </div>
                        <div class="form-group">
                            <strong>Caja Id:</strong>
                            {{ $contrato->caja_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
