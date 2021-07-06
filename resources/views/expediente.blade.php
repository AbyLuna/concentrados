@extends('layouts.app')

@section('template_title')
    Vista Expediente
@endsection
@section('content')
<div class="container">
     <form>
     <div class="form-group row">
        @foreach ($expediente as $contrato) 
          <label  class="col-sm-2 col-form-label">Nombre de la serie</label>
     <div class="col-sm-10">
        <input type="numSerie" class="form-control"> " value="{{ $contrato->numSerie }}"
       
     </div>
     </div>
      <div class="form-group">
        <label>Breve descripción </label>
        <textarea class="form-control" id="descripcion" rows="3"> {{ $contrato->descripcion  }} </textarea>
      </div>
    <div class="jumbotron jumbotron-fluid  form-inline">
      <div class="col-md-4">
            <label>Fecha de apertura </label> 
            <input type="date" name="fechaApertura"  />
        </div>
        <div class="col-md-4 ml-9">
            <label>Fecha de cierre </label>
            <input type="date" name="fechaCierre"  />
        </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Valor documental</label>
    <div class="col-sm-10">
      <input  class="form-control" name="valorDocumental">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Valor de la información</label>
    <div class="col-sm-10">
      <input class="form-control" name="valorInformacion">
    </div>
  </div>
    <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Vigencia del tramite</label>
        <div class="col-sm-10">
          <input  class="form-control" name="vigTramite">
        </div>
    </div>
    <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Vigencia de concentración</label>
        <div class="col-sm-10">
          <input  class="form-control" name=vigConcentracion>
        </div>
      </div>
      <div class="jumbotron form-inline">
        <p>Suma total de los años de vigencias:</p> 
        <div class="col-md-3">
          <input type="text" class="form-control" name='totalVigencia'>
       </div>
        <div class="input-group-prepend">
          <span class="input-group-text">Años
          </span>
        </div>
             </div>
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Destino final</label>
        <div class="col-sm-10">
          <input class="form-control" name="destinoFinal">
        </div>
      </div>
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Signatura del archivo</label>
        <div class="col-sm-10">
          <input  class="form-control" name="signatura">
        </div>
      </div>
      <div class="form-group row">
        <label>Observaciones </label>
        <textarea class="form-control" id="observaciones" rows="3"></textarea>
      </div> <br> <br><br> <br>
      <div class="jumbotron form-group row footer-copyright text-center p-1">
          © 2021 Derechos reservados Departamento de Tecnologías de la Información
    </div>
    </div>
  </form>
  @endforeach
</div>
@endsection
