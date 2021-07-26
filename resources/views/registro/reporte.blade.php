@extends('layouts.app')
@section('content')




<body>
    
    
       <form class="container" action="{{ route('imprimirReporte') }}" method="post">
            @csrf
         
         <h2 class="text-center"> Vale de Prestamo de documentación en archivo de Concentración</h2>
       
 
         <div class="text-right">
         <label>NUMERO DE SOLICITUD: 
            <input name="numero" class="form-control text-center" required="" ></label>

      </div>
        <br>
    <div class="container">

        <h5 class="text-center"><strong >Datos del Jefe del área quien solicita el Expediente</strong></h5>
        
            <h6 class="my-3">Nombre del Jefe de Area que Solicita:</h6>
        <input readonly="" name="name" class="text-center form-control" value="{{ $registro->respNombre }}">

                
          <br>


          <div class="jumbotron-fluid row" >

            <div  class="col">
                <p class="" >PUESTO:</p> 
                <input type="text" class="form-control" required="" name="puesto">


            </div>

            <div class="col">

             <p class="" >AREA DE ADSCRIPTION:</p>
             <input type="text" class="form-control" required="" name="adcription">

         </div>
         <div class="col">

             <p class=""> TELEFONOS/EXTENCION:</p>
             <input type="text" class="  form-control" required="" name="ext">

         </div>
        
     </div>
     <div class="row">
        <div class="col-10">
        <p >Nombre del RAT:</p>
             <input type="text" class=" form-control" required="" name="rat">
         </div>
             
             <div class="col">
            <p>Fecha de Solicitud</p>
            <input type="date" name="fechaSolicituud">
        

         </div>



     </div>
     </div>
 <br><br>        
  <h5 class="text-center "><strong>Datos de origen de Expediente</strong></h5>
      

  


                        <h6 class="text-center pad-basic no-btm">Agregar archivo para prestamo</h6>
                <table class="table "  id="tabla">
                        <thead>
       
        
        <tr>
            <th>Acta</th>
            <th>Caja</th>
            <th>Serie</th>
            <th>Tomo</th>

        </tr>
    </thead>
                    <tr class="fila-fija">
                        <td><input required name="acta[]" class="form-control" placeholder="Acta"/></td>
                        <td><input required name="caja[]" class="form-control" placeholder="Caja"/></td>
                        <td><input required name="serie[]" class="form-control" placeholder="Serie"/></td>
                        <td><input required name="tomo[]" class="form-control" placeholder="Tomo"/></td>
                        <td class="eliminar"><input type="button"   value="Menos -"/></td>
                    </tr>
                </table>

                <div class="btn-der">
                   
                    <button id="adicional" name="adicional" type="button" class="btn btn-warning"> Más + </button>

                </div>
            

   




<fieldset class="card bg-light">
    <h5 class="content  text-center mt-4"><strong> Estado fisico del Expediente</strong></h5>
    <h6 class="content p-1 alert-info text-center">(Estos datos son llenados exclusivamente por el encargado del archivo de
        concentración)
    </h6>
    
    <div class="form-inline  p-1">
        <p class="col-md-auto" for="nprestamo">No. Folios</p>
        <input type="text" required="" class="form-control"  name="folios"
        placeholder="No. Folios">
        <label class="col-md-auto ml-4" for="estFisico"> Calidad Documental</label>
        <select required="" name="estado" class="form-control">
            <option></option>
            <option>Buena</option>
            <option>Media</option>
            <option>Mala</option>
        </select>
        <div class="form-group p-1">
            <label class="col-md-auto ml-4" for='apertura'>Fecha de Prestamo</label>
            <input type="date" required="" name="fecha">
        </div>
        <div class="form-group p-1">
            <label class="col-md-auto " >Plazo del prestamo</label>
            <input type="text" required="" class="form-control" name="plazo">
        </div>
        <div class="form-group p-2-4">
            <label class="col-md-auto ml-4">Prórroga</label>
            <input type="text" required="" class="form-control" name="prorroga" 
            placeholder="Prórroga">
        </div>

    </div>
</fieldset>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">OBSERVACIONES</span>
  </div>
  <textarea name="observaciones" required="" class="form-control" aria-label="With textarea"></textarea>
</div>
<br>


<br>

           <nav class="navbar navbar-light ">
             <button type="submit" class="btn btn-success" name="reporteR" id="reporteR" >Imprimir</button>
           <a class="btn btn-warning" href="/registros">
                Regresar</a>
         </nav>


</form>
</div>

</body>
@endsection
