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
        <!-- <fieldset class="row justify-content-end">
            <div class="col-3">
                <h5 class="text-left my-3"><strong>Datos del solicitante:</strong></h5>
            </div>
            <div class="col-8 card-header">
                
                
                <label class ="col-5 form-control" >No. Oficio de Solicitud: 2</label>
                <label  class="col-5 form-control">Fecha de elaboración: </label>
                <br>
                <label  class="col-3">Nombre del RAT:</label>
                <input type="text" class ="col-6 form-control" name="rat">
            </div>
        </fieldset> -->
     


        <h5><strong>Datos del Jefe del área quien solicita el Expediente</strong></h5>
        <div class="row">   
            <h6 class="col-3 my-3">Nombre del Jefe de Area que Solicita:</h6>
        <input disabled="" name="name" class="col-9 form-control" value="{{ $registro->respNombre }}">

        </div>
        <div class="container-fluid">
        
          <br>


          <div class="row" >

            <div  class="col-3">
                <p class="" >PUESTO:</p> 
                <input type="text" class="form-control" name="puesto">


            </div>

            <div class="col-3">

             <p class="" >AREA DE ADSCRIPTION:</p>
             <input type="text" class="form-control" name="adcription">

         </div>
         <div class="col-3">

             <p class=""> TELEFONOS/EXTENCION:</p>
             <input type="text" class="  form-control" name="ext">

         </div>
        
     </div>
     <div>
        <p class="">Nombre del RAT:</p>
             <input type="text" class=" form-control" name="rat">
             

         </div>



 </div>
  <h5 class="text-center "><strong>Datos de origen de Expediente</strong></h5>
      

  <br><br>        
  <div class="container">

         
            <form method="post">
                <h5 class=" text-center">Lista de Expedientes</h5>
                <table class="table"  id="tabla">
                    <tr class="fila-fija">
                        <td><input required name="idalumno[]" placeholder="ID Alumno"/></td>
                        <td><input required name="nombre[]" placeholder="Nombre Alumno"/></td>
                        <td><input required name="carrera[]" placeholder="Carrera"/></td>
                        <td><input required name="grupo[]" placeholder="Grupo"/></td>
                        <td class="eliminar"><input type="button"   value="Menos -"/></td>
                    </tr>
                </table>

                <div class="btn-der">
                    <input type="submit" name="insertar" value="Insertar Alumno" class="btn btn-info"/>
                    <button id="adicional" name="adicional" type="button" class="btn btn-warning"> Más + </button>

                </div>
            </form>

</div>

    <script>
            
            $(function(){
                // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
                $("#adicional").on('click', function(){
                    $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
                });
             
                // Evento que selecciona la fila y la elimina 
                $(document).on("click",".eliminar",function(){
                    var parent = $(this).parents().get(0);
                    $(parent).remove();
                });
            });
        </script>



<!--  <table class="table table-bordered">
    <thead>
       
        
        <tr>
            <th>Acta</th>
            <th>Caja</th>
            <th>Serie</th>
            <th>Tomo</th>

        </tr>
    </thead>
    <tbody>
      <tr>
        <td><input class="form-control col-sm-5" name="clave" ></td>



        <td> <input class="form-control col-sm-5" name="clave" > </td>
        <td> <input class="form-control col-sm-5" name="clave" > </td>
        
        <td> <input class="form-control"  class="col-12" name="claveNombre"></td>
    </tr>
<tr>
        <td><input class="form-control col-sm-5" name="clave" ></td>
        <td> <input class="form-control col-sm-5" name="clave" > </td>
        <td> <input class="form-control col-sm-5" name="clave" > </td>
        
        <td> <input class="form-control"  class="col-12" name="claveNombre"></td>
    </tr>
    <tr>
        <td><input class="form-control col-sm-5" name="clave" ></td>
        <td> <input class="form-control col-sm-5" name="clave" > </td>
        <td> <input class="form-control col-sm-5" name="clave" > </td>
        
        <td> <input class="form-control"  class="col-12" name="claveNombre"></td>
    </tr>
    <tr>
        <td><input class="form-control col-sm-5" name="clave" ></td>
        <td> <input class="form-control col-sm-5" name="clave" > </td>
        <td> <input class="form-control col-sm-5" name="clave" > </td>
        
        <td> <input class="form-control"  class="col-12" name="claveNombre"></td>
    </tr>
</tbody>
</table> -->


<fieldset class="container card bg-light">
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




<div class="container">

<div class=" input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">OBSERVACIONES</span>
  </div>
  <textarea name="observaciones" class="form-control" aria-label="With textarea"></textarea>
</div>
<br>


<br>

           <nav class=" navbar navbar-light ">
             <button type="submit" class="btn btn-success ">Imprimir</button>
             <a class="btn btn-danger" href="/registros">
             Cancelar Registro</a>
         </nav>

</div>
        
        




</form>

</body>
@endsection