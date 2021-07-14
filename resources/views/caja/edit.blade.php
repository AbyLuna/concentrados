@extends('layouts.app')

@section('template_title')
    Update Caja
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')
                <a class="nav-link text-right" href="{{ route('cajas.index') }}">
                    <img src="/img/back2.png" width="35" height="auto"> 
                </a>
                <div class="card card-default">
                    <div class="card-header">
                      <strong> <h4 class="card-title">Actualizar información de la caja</h5></strong>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cajas.update', $caja->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('caja.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
