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
                  <a class="nav-link text-right " href="#">
                    <img src="/img/back2.png" width="35" height="auto"> 
                  </a>
                  <center>
                    <h3>Información del expediente
                    </h3></center>
                </span>
            </div>
            <div class="container">
                <br>
                <form action="{{ route('expedientes.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"> <b>Nombre de la serie </b></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="numSerie" name="numSerie"
                                placeholder="Nombre de la serie">
                        </div>
                    </div>
                    <div class="form-group">
                        <label> <b>Breve descripción </b></label>
                        <textarea class="form-control" id="descripcion" rows="3" name="descripcion"
                            placeholder="Breve decripción"></textarea>
                    </div>

                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                         
                            <h5 class="card-title"><b>Fecha de apertura</b></h5>
                            <input type="date" name="fechaApertura" />
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title"><b>Fecha de cierre</b></h5>
                            <input type="date" name="fechaCierre" />
                          </div>
                        </div>
                      </div>
                    </div>
                      <br><br>
                    <div class="container"> 
                    <div class="form-group row">
                       <b> <p>Seleciona el Valor Documental:</p></b>
                        <label class="col-sm-2 col-form-label"></label>
                        <select class="form-control" name='valorDocumental_id' id="valorDocumental_id">
                            @foreach ($valorDocumental as $valor )
                            <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                    <b> <p>Seleciona el Valor de la Información:</p></b>
                        <label class="col-sm-2 col-form-label"></label>
                        <select class="form-control" name='valorInformacion_id' id="valorInformacion_id">
                            @foreach ($valorinformacion as $valor )
                            <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                    <b> <p>Seleciona la vigencia en archivo de tramite:</p></b>
                        <label class="col-sm-2 col-form-label"></label>
                        <select class="form-control" name='vigTramite_id' id="vigTramites_id">
                            @foreach ( $vigTramites as $valor )
                            <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                    <b><p>Seleciona la vigencia en archivo de concentración:</p></b>
                        <label class="col-sm-2 col-form-label"></label>
                        <select class="form-control" name='vigConcentracion_id' id="vigTConcentracion_id">
                            @foreach ( $vigconcentracion as $valor )
                            <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="jumbotron form-inline">
                    <b><p>Suma total de los años de vigencias:</p></b>
                        <div class="col-md-3">
                            <input type="text" class="form-control"
                                onclick="return confirm('Suma los años de viegencia de contrato + vigencia en tramite, solo acepta numeros enteros.');"
                                id="totalVigencia" placeholder="Digita el total 00 " name='totalVigencia'>
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">Años
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                    <b><p>Selecciona el destino final:</p></b>
                        <label class="col-sm-2 col-form-label"></label>
                        <select class="form-control" name='destinoFinal_id' id="destinoFinal_id">
                            @foreach ( $destinoFinal as $valor )
                            <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b> Signatura del archivo</b> </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="signatura" placeholder="Signatura del archivo"
                                name="signatura">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label><b> Observaciones</b> </label>
                        <textarea class="form-control" name="observaciones" id="observaciones" rows="3"></textarea>
                    </div> <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="hidden" value="{{ $contrato }}" name="contrato_id">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Crear Expediente</button>
                    
            </div>
            </form>
            <br><br>
            <div class='container'>
                <div class="jumbotron form-group row footer-copyright text-center p-2">
                    <center>
                        © 2021 Derechos reservados Departamento de Tecnologías de la Información
                    </center>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
