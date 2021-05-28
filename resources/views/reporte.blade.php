

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
</head>


<body>
    
    
       <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white fondo-nav sticky-top">
             <!-- <img src="/img/cabecera.png" width="auto" height="auto"> -->
             <a class="btn btn-danger ml-auto " href="/registros">
             Cancelar Registro</a>
         </nav>

        

         <h4 class="row justify-content-center "><strong> Vale de Prestamo de documentación en archivo de Concentración
         </strong></h4>

         <div class="row justify-content-end ">
            <input type="text" placeholder="No. de préstamo">
        </div>

        <br>
        <fieldset class="row ">

            <div class="col-3">
                <h5 class="text-right"><strong>Datos del solicitante:</strong></h5>
            </div>


            <div class="col-8 card-header">
                
                <label class ="col-5" >No. Oficio de Solicitud: 2</label>
                <label class="col-5">Fecha de elaboración: {{ date('Y-m-d') }}</label>
                <br>
                <label for="rat" class="col-3">Nombre del RAT:</label>
                <input type="text" class ="col-6 " name="data[rat]"
                placeholder="Nombre del RAT">
            </div>

        </fieldset>
        <br>



        <h5><strong>Datos del Jefe del área quien solicita el Expediente</strong></h5>
        <div class="container-fluid">
          <h5 class="text-center"> {{ $registro->respNombre }}</h5>
          <br>


          <div class="card" >

            <div  class="row">
                <p class="col-3 text-right" >PUESTO:</p> 
                <input type="text" class="col-8">


            </div>

            <div class="row">

             <p class="col-3 float-left text-right" >AREA DE ADCRIPTION:</p>
             <input type="text" class="col-8">

         </div>
         <div class="row">

             <p class="col-3 text-right"> TELEFONO /EXTENCION:</p>
             <input type="text" class="col-8">

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
        <td> <input type="textarea" name=""> </td>
        
        <td> <input type="text" class="col-12" name=""></td>
    </tr>
    <tr>
        <td>Serie:</td>
        <td> <input type="text" name=""> </td>
        <td><input type="text" class="col-12" ></td>
    </tr>

</tbody>
</table>


<fieldset class="card bg-light">
    <h5 class="content mt-4"><strong> Estado fisico del Expediente</strong></h5>
    <h6 class="content p-1 alert-info text-center">(Estos datos son llenados exclusivamente por el encargado del archivo de
        concentración)
    </h6>
    <div class="form-group">
        <label for="nprestamo">Estado físico</label>
        <input type="text" class="form-control" id="nprestamo" name="data[nprestamo]"
        placeholder="Estado físico">
    </div>
    <div class="form-inline  p-1">
        <label class="col-md-auto" for="nprestamo">No. Fojas</label>
        <input type="text" class="form-control" id="nprestamo" name="data[nprestamo]"
        placeholder="No. hojas">
        <label class="col-md-auto ml-4" for="estFisico"> Calidad Documental</label>
        <select id="estFisico" class="form-control">
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
            <label class="col-md-auto " for="nprestamo">Plazo del prestamo</label>
            <input type="text" class="form-control" id="nprestamo" name="data[nprestamo]">
        </div>
        <div class="form-group p-2-4">
            <label class="col-md-auto ml-4" for="nprestamo">Prórroga</label>
            <input type="text" class="form-control" id="nprestamo" name="data[nprestamo]"
            placeholder="Prórroga">
        </div>

    </div>
</fieldset>






<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">OBSERVACIONES</span>
  </div>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
<br>

<div class="row">

    <div class="col text-center">
        <label for="nprestamo">Nombre del que recibe y firma</label>
       <br><br><br>
        <p>____________________________________________________</p>
    </div>
    <div class="col text-center">
        <label for="nprestamo">Nombre del que entrega y firma</label>
        <br><br><br>
        <p>____________________________________________________</p>
    </div>
    
</div>
<br>

        
        <a  class="btn btn-success" href="{{ route('imprimirReporte',$registro->id) }}">imprimir</a>




</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>