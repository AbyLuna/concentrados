@extends('layouts.app')

@section('template_title')
    {{ $location->name ?? 'Ver Ubicación' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Ubicación</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('locations.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero de caja:</strong>
                            {{ $location->numCaja }}
                        </div>
                        <div class="form-group">
                            <strong>Pasillo:</strong>
                            {{ $location->pasillo }}
                        </div>
                        <div class="form-group">
                            <strong>Anaquel:</strong>
                            {{ $location->anaquel }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
