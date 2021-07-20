@extends('layouts.app')

@section('template_title')
     Registro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <a class="nav-link text-right " href="{{ route('registros.index') }}">
                    <img src="/img/back2.png" width="35" height="auto"> 
                </a>
                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Edita el Registro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('registros.update', $registro->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('registro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
