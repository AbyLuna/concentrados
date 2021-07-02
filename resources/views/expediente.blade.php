@extends('layouts.app')

@section('template_title')
    Vista Expediente
@endsection
@section('content')
<div class="container">
     <form>
     <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Nombre de la serie</label>
     <div class="col-sm-10">
        <input type="nomSerie" class="form-control" id="nomSerie" placeholder="Nombre de la serie">
     </div>
     </div>
      <div class="form-group">
        <label>Breve descripciòn </label>
        <textarea class="form-control" id="descripcion" rows="3"></textarea>
      </div>
    <div class="jumbotron jumbotron-fluid  form-inline">
      <div class="col-md-4">
            <label>Fecha de apertura </label> 
            
            <input type="date" name="fechaApertura" min="2018-03-25" max="2018-05-25"  />
        </div>
        <div class="col-md-4 ml-9">
            <label>Fecha de cierre </label>
            <input type="date" name="fechaCierre" min="2018-03-25" max="2018-05-25" />
        </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Valor documental</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Valor de la información</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Vigencia del tramite</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Vigencia de concentración</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="jumbotron form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Total de tiempo de vigencia </label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Destino final</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Signatura del archivo</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <label>Observaciones </label>
        <textarea class="form-control" id="descripcion" rows="3"></textarea>
      </div> <br> <br>
      <div class="jumbotron form-group row footer-copyright text-center p-1">
          © 2021 Derechos reservados Departamento de Tecnologías de la Información
    </div>
    </div>
  </form>
</div>
@endsection
