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
                            <span class="card-title">Vista de caja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cajas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Acta/No. de caja:</strong>
                            {{ $caja->numActa }}
                        </div>
                        <div class="form-group">
                            <strong>No. de caja:</strong>
                            {{ $caja->numCaja }}
                        </div>
                        <div class="form-group">
                            <strong>No. de tomos de la caja:</strong>
                            {{ $caja->numTomosCaja }}
                        </div>
                        <div class="form-group">
                            <strong>Área a la que pertenece:</strong>
                            {{ $caja->areaPert }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
