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
                    <h5>Información del expediente
                    </h5>
                </span>
            </div>
            <div class="container">
                 <br>
                <form action="{{ route('expedientes.store') }}" method="post">
                    @csrf 
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Nombre de la serie</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="numSerie" name="numSerie"
                    placeholder="Nombre de la serie"> 
                </div>
                </div>
                 <div class="form-group">
                   <label>Breve descripción </label>
                   <textarea class="form-control" id="descripcion" rows="2" name="descripcion"  placeholder="Breve decripción">></textarea>
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
                <p>Seleciona el Valor Documental:</p>
               <label class="col-sm-2 col-form-label"></label> 
             <select class="form-control" name='valorDocumental_id' id="valorDocumental_id">
                    @foreach ($valorDocumental as $valor )
                    <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>
                    @endforeach
                </select>
             </div>
          
             <div class="form-group row">
                <p>Seleciona el Valor de la Información:</p>
               <label class="col-sm-2 col-form-label"></label> 
             <select class="form-control" name='valorInformacion_id' id="valorInformacion_id">
                    @foreach ($valorinformacion as $valor )
                    <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>
                    @endforeach
                </select>
             </div>

    
             <div class="form-group row">
              <p>Seleciona la Vigencia del tramite:</p>
             <label class="col-sm-2 col-form-label"></label> 
             <select class="form-control" name='vigTramite_id' id="vigTramites_id">
                  @foreach ( $vigTramites as $valor )
                  <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>
                  @endforeach
              </select>
           </div>

           <div class="form-group row">
            <p>Seleciona la Vigencia del contrato:</p>
           <label class="col-sm-2 col-form-label"></label> 
           <select class="form-control" name='vigConcentracion_id' id="vigTConcentracion_id">
                @foreach ( $vigconcentracion as $valor )
                <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>
                @endforeach
            </select>
         </div>
           <div class="jumbotron form-group row">
              <label  class="col-sm-2 col-form-label">Suma total de los años de vigencias</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="totalVigencia" placeholder=" Suma total de los años de vigencias" name='totalVigencia'>
             </div>
                 </div>

                 <div class="form-group row">
                  <p>Selecciona el destino final:</p>
                 <label class="col-sm-2 col-form-label"></label> 
                 <select class="form-control" name='destinoFinal_id' id="destinoFinal_id">
                      @foreach ( $destinoFinal as $valor )
                      <option value=" {{$valor->id}} ">{{$valor->descripcion}}</option>
                      @endforeach
                  </select>
               </div>
                 <div class="form-group row">
                   <label  class="col-sm-2 col-form-label">Signatura del archivo</label>
                   <div class="col-sm-10">
                     <input type="text" class="form-control" id="signatura" placeholder="Signatura del archivo" name="signatura">
                   </div>
                 </div>
                 <div class="form-group row">
                   <label>Observaciones </label>
                   <textarea class="form-control" name="observaciones" id="observaciones" rows="3"></textarea>
                  </div> <br> 
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <input type="hidden" value="{{ $contrato }}"  name="contrato_id">
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