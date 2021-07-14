@extends('layouts.app')

@section('template_title')
    Create Caja
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                <a class="nav-link text-right " href="{{ route('cajas.index') }}">
                    <img src="/img/back2.png" width="35" height="auto"> 
                </a>
                <div class="card card-default">
                    <div class="card-header">
                       <strong> <h4 class="card-title">Crear caja</h5></strong>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cajas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('caja.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
