@extends('layouts.app')

@section('template_title')
Crear un expediente
@endsection

@section('content')

<div class="row justify-content-center p-2">

    <div class="col-md-12">
        @includeif('partials.errors')
        <div class="card card-default">
            <div class="card-header">
                <span class="card-title">
                    <h2>Información del expediente
                    </h2>
                </span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('expedientes.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    <form action="{{ route('expedientes.store') }}" method="post">
                        @csrf
                        <div class="md-auto p-4">
                            <label class="col-md-auto" for="signatura">Nombre de la serie:</label>
                            <input type="text" class="form-control" id="numSerie" name="numSerie"
                                placeholder="Nombre de la serie"> <br>
                            <label class="col-md-auto" for="signatura">Breve descripción:</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion"
                                placeholder="Nombre de la serie">
                            <div class="form-inline md-auto p-2"> <br> <br> <br>
                                <label class="col-md-auto ml-1">Fecha de apertura:</label>
                                <input type="date" name="fechaApertura">
                                <label class="col-md-auto ml-auto">Fecha de cierre:</label>
                                <input type="date" name="fechaCierre">
                            </div>

                            <div class="form-group">
                                <p>Seleciona el Valor Documental:</p>
                                <select name='valorDocumental_id' id="valorDocumental_id" class="from-control">

                                    @foreach ($valorDocumental as $valor )
                                    <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">


                                <p>Seleciona el Valor Información:</p>
                                <select name='valorInformacion_id' id="valorInformacion_id" class="from-control">

                                    @foreach ($valorinformacion as $valor )
                                    <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">

                                <p> Vigencia del tramite</p>
                                <select name='vigTramite_id' id="vigTramite_id" class="from-control">

                                    @foreach ($vigTramites as $valor )
                                    <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <label class="col-md-auto" for="signatura">Vigencia total:</label>
                            <input type="numero" class="form-control" id="signatura" name="totalVigencia"
                                placeholder="totalVigencia">


                            <div class="form-group">

                                <p> Total de años de vigencia del expediente:</p>
                                <select name='vigConcentracion_id' id="vigConcentracion_id" class="from-control">

                                    @foreach ($vigconcentracion as $valor )
                                    <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">

                                <p> Destino Final</p>
                                <select name='destinoFinal_id' id="destinoFinal_id" class="from-control">

                                    @foreach ($destinoFinal as $valor )
                                    <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="md-auto p-4">



                                <label class="col-md-auto" for="signatura">signatura:</label>
                                <input type="text" class="form-control" id="signatura" name="signatura"
                                    placeholder="signatura">

                                <label class="col-md-auto" for="signatura">observaciones:</label>
                                <input type="text" class="form-control" id="observaciones" name="observaciones"
                                    placeholder="observaciones">


                                <div class="form-group">

                                   
                                    <input type="hidden" value="{{ $contrato }}"  name="contrato_id">

                                    
                                </div>

                            </div>

                            <button type="submit" class="btn btn-success">Crear Expediente</button>


                    </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection