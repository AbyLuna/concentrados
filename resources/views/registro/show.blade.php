@extends('layouts.app')

@section('template_title')
    
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombrearch:</strong>
                            {{ $registro->nombreArch }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacionarch:</strong>
                            {{ $registro->ubicacionArch }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $registro->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $registro->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Respnombre:</strong>
                            {{ $registro->respNombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
