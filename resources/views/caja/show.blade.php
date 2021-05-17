@extends('layouts.app')

@section('template_title')
    {{ $caja->name ?? 'Show Caja' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Caja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cajas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Número de acta:</strong>
                            {{ $caja->numActa }}
                        </div>
                        <div class="form-group">
                            <strong>Número de caja:</strong>
                            {{ $caja->numCaja }}
                        </div>
                        <div class="form-group">
                            <strong>Número de tomos en la caja:</strong>
                            {{ $caja->numTomosCaja }}
                        </div>
                        <div class="form-group">
                            <strong>Área a la que pertenece:</strong>
                            {{ $caja->areaPert }}
                        </div>
                        <div class="form-group">
                            <strong>Contrato Id:</strong>
                            {{ $caja->contrato_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
