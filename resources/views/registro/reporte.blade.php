@extends('layouts.app')
@section('content')
<body>
    
    
       <form class="container" action="{{ route('imprimirReporte') }}" method="post">
            @csrf
         
         <h2 class="text-center"> Vale de Prestamo de documentación en archivo de Concentración</h2>
         <div class="text-right">
         <label>NUMERO DE SOLICITUD: 
            <input readonly="" name="numero" class="form-control text-center" value="1234"></label>
      </div>
        <br>
        <fieldset class="row justify-content-end">

            <div class="col-3">
                <h5 class="text-left my-3"><strong>Datos del solicitante:</strong></h5>
            </div>


            <div class="col-8 card-header">
                
                
                <label class ="col-5 form-control" >No. Oficio de Solicitud: 2</label>
                <label  class="col-5 form-control">Fecha de elaboración: {{ date('Y-m-d') }}</label>
                <br>
                <label  class="col-3">Nombre del RAT:</label>
                <input type="text" class ="col-6 form-control" name="rat">
            </div>

        </fieldset>
        <br>



        <h5><strong>Datos del Jefe del área quien solicita el Expediente</strong></h5>
        
        <input readonly="" name="name" class="text-center form-control" value="{{ $registro->respNombre }}">
        <div class="container-fluid">
        
          <br>


          <div class="card" >

            <div  class="row">
                <p class="col-3 text-right" >PUESTO:</p> 
                <input type="text" class="col-8 form-control" name="puesto">


            </div>

            <div class="row">

             <p class="col-3 float-left text-right" >AREA DE ADCRIPTION:</p>
             <input type="text" class="col-8 form-control" name="adcription">

         </div>
         <div class="row">

             <p class="col-3 text-right"> TELEFONO /EXTENCION:</p>
             <input type="text" class="col-8 form-control" name="ext">

         </div>




     </div>



 </div>
 <br><br>


 <table class="table table-bordered">
    <thead>
        <h5 class="text-center ">Datos del Expediente</h5>

        <tr>
            <th></th>
            <th>CLAVE</th>
            <th>NOMBRE</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td>Seccion:</td>
        <td> <input class="form-control col-sm-5" name="clave" > </td>
        
        <td> <input class="form-control"  class="col-12" name="claveNombre"></td>
    </tr>
    <tr>
        <td>Serie:</td>
        <td> <input class="form-control col-sm-5" name="serie"> </td>
        <td><input type="text" class="col-12 form-control" name="serieNombre" ></td>
    </tr>

</tbody>
</table>


<fieldset class="card bg-light">
    <h5 class="content mt-4"><strong> Estado fisico del Expediente</strong></h5>
    <h6 class="content p-1 alert-info text-center">(Estos datos son llenados exclusivamente por el encargado del archivo de
        concentración)
    </h6>
    <div class="form-group">
        <label >Estado físico:</label>
        <input type="text" class="form-control"  name="fisico"
        placeholder="Estado físico">
    </div>
    <div class="form-inline  p-1">
        <label class="col-md-auto" for="nprestamo">No. Fojas</label>
        <input type="text" class="form-control"  name="hojas"
        placeholder="No. hojas">
        <label class="col-md-auto ml-4" for="estFisico"> Calidad Documental</label>
        <select name="estado" class="form-control">
            <option></option>
            <option>Buena</option>
            <option>Media</option>
            <option>Mala</option>
        </select>
        <div class="form-group p-1">
            <label class="col-md-auto ml-4" for='apertura'>Fecha de elaboración</label>
            <input type="date" name="fecha">
        </div>
        <div class="form-group p-1">
            <label class="col-md-auto " >Plazo del prestamo</label>
            <input type="text" class="form-control" name="plazo">
        </div>
        <div class="form-group p-2-4">
            <label class="col-md-auto ml-4">Prórroga</label>
            <input type="text" class="form-control" name="prorroga" 
            placeholder="Prórroga">
        </div>

    </div>
</fieldset>






<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">OBSERVACIONES</span>
  </div>
  <textarea name="observaciones" class="form-control" aria-label="With textarea"></textarea>
</div>
<br>


<br>

           <nav class="navbar navbar-light ">
             <button type="submit" class="btn btn-success ">Imprimir</button>
             <a class="btn btn-danger" href="/registros">
             Cancelar Registro</a>
         </nav>


        
        




</form>

</body>
@endsection