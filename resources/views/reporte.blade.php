<!DOCTYPE html>
<html lang="en">
<head>


 <!-- Styles -->
<!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Reporte de Prestamo</title>
</head>
<body>
     
    <style type="text/css">
      
      @page { margin:10px; }
    </style>




        <img class="align-items-md-center img-fluid" src="{{ asset('/img/cabecera.png') }}">
    
       <div class="container">
            

        

         <h4 class="page-header text-center"><strong> Vale de Prestamo de documentación en archivo de Concentración
         </strong></h4>
       

         <div class="row justify-content-end ">
            <input type="text" placeholder="No. de préstamo">
        </div>

        <br>
        <div class="row ">

            <div class=" col-xs-4">
                <h5 class="text-right"><strong>Datos del solicitante:</strong></h5>
            </div>


            <div class=" col-xs-9 card">
                
                <label class ="col-5" >No. Oficio de Solicitud: 2</label>
                <label class="col-5">Fecha de elaboración: {{ date('Y-m-d') }}</label>
                <br>
                <label for="rat" class="col-3">Nombre del RAT:</label>
                <input type="text" class ="col-6 " name="data[rat]"
                placeholder="Nombre del RAT">
            </div>

        </div>
        <br>



        <h5><strong>Datos del Jefe del área quien solicita el Expediente</strong></h5>
        <div class="container-fluid">
         

          <h5 class="text-center"> {{ $registro->respNombre }}</h5>
       

          <br>


          <div class="card" >

            <div  class="row">
                <p class="col-sm-3 text-right" >PUESTO:</p> <br>
                <input type="text" class="col-sm-8">


            </div>

            <div class="row">

             <p class="col-sm-3 float-left text-right" >AREA DE ADCRIPTION:</p><br>
             <input type="text" class="col-sm-8">

         </div>
         <div class="row">

             <p class="col-sm-3 text-right"> TELEFONO /EXTENCION:</p><br>
             <input type="text" class="col-sm-8">

         </div>




     </div>




 </div>
 <div class="clearfix"></div>
 <br><br><br><br><br><br><br><br>

 <h6 >Datos del Expediente</h6>
 <table class="table table-responsive">
 
    <thead>
        

        <tr>
            <th>      </th>
            <th>CLAVE</th>
            <th>NOMBRE</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td>Seccion:</td>
       <td><input type="text" name=""></td>
        
        <td><input type="text"  name=""></td>
    </tr>
    <tr>
        <td>Serie:</td>
        <td> <input type="text" name=""></td>

        <td><input  type="text" ></td>
    </tr>

</tbody>
</table> 


<div class="card bg-light">
    <h6 class="content mt-4"><strong> Estado fisico del Expediente</strong></h6>
    <h6 class="content p-1 alert-info text-center">(Estos datos son llenados exclusivamente por el encargado del archivo de
        concentración)
    </h6>
    <div class="form-group">
        <label for="nprestamo">Estado físico</label>
        <input type="text" class="form-control" id="nprestamo" name="data[nprestamo]"
        placeholder="Estado físico">
    </div>
    <div class="form-inline  p-1">
        <label class="col" for="nprestamo">No. Fojas</label>
        <input type="text" class="form-control" id="nprestamo" name="data[nprestamo]"
        placeholder="No. hojas">
        <label class="col ml-4" for="estFisico"> Calidad Documental</label>
        <select id="estFisico" class="form-control">
            <option></option>
            <option>Buena</option>
            <option>Media</option>
            <option>Mala</option>
        </select>
        <div class="form-group ">
            <label class="col-md-auto ml-4" for='apertura'>Fecha de elaboración</label>
            <input type="date" name="fecha">
        </div>
        <br>
        <div class="form-group ">
            <label class="col-md-auto " for="nprestamo">Plazo del prestamo</label>
            <input type="text" class="form-control" id="nprestamo" name="data[nprestamo]">
        </div>
        <div class="form-group ">
            <label class="col-md-auto ml-4" for="nprestamo">Prórroga</label>
            <input type="text" class="form-control" id="nprestamo" name="data[nprestamo]"
            placeholder="Prórroga">
        </div>

    </div>
</div>







<br>

<div class="row">

    <div class="col-sm-6 text-center">
        <label class="text-center">Nombre del que recibe y firma</label>
       <br><br><br>
        <p class="text-center">______________________________</p>
    </div>
    <div class="col-sm-6 text-center">
        <label class="text-center">Nombre del que entrega y firma</label>
        <br><br><br>
        <p class="text-center">______________________________</p>
    </div>
    
</div>
<br>

        
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-white fondo-nav sticky-top">
            
              <a  class="btn btn-success my-1" href="{{ route('imprimirReporte',$registro->id) }}">imprimir</a>
             <a class="btn btn-danger ml-auto " href="/registros">Cancelar Registro</a>
         </nav>




</div>


</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>