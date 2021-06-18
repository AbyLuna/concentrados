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
                            <strong>Numacta:</strong>
                            {{ $caja->numActa }}
                        </div>
                        <div class="form-group">
                            <strong>Numcaja:</strong>
                            {{ $caja->numCaja }}
                        </div>
                        <div class="form-group">
                            <strong>Numcontratos:</strong>
                            {{ $caja->numContratos }}
                        </div>
                        <div class="form-group">
                            <strong>Numtomoscaja:</strong>
                            {{ $caja->numTomosCaja }}
                        </div>
                        <div class="form-group">
                            <strong>Numbitacora:</strong>
                            {{ $caja->numBitacora }}
                        </div>
                        <div class="form-group">
                            <strong>Pasillo:</strong>
                            {{ $caja->pasillo }}
                        </div>
                        <div class="form-group">
                            <strong>Anaquel:</strong>
                            {{ $caja->anaquel }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
