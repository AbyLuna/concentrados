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
      @html { margin: 10px; }

    </style>



    


        <img class="img-fluid" src="{{ asset('/img/cabecera.png') }}">
    
       <div class="container-fluid">
          
        

        
            

         <h4 class="page-header text-center"><strong> Vale de Prestamo de documentación en archivo de Concentración
         </strong></h4>
       

         <div class="text-right ">
            Numero De Solicitud: {{ $request->numero }}
        </div>

        <br>
        <div class="row ">

            <div class=" col-xs-4">
                <h5 class="text-right"><strong>Datos del solicitante:</strong></h5>
            </div>
                        

            <div class=" col-xs-9 card">
                <h5>{{ $request->name }}</h5>
               
                <label  >No. Oficio de Solicitud: {{ $request->numero }}</label>
                <label  >Fecha de elaboración: {{ date('Y-m-d') }}</label><br>
                <label >Nombre del RAT:</label>
                <input type="text" value={{ $request->rat }}>
            </div>

        </div>
        <br>



        <h5><strong>Datos del Jefe del área quien solicita el Expediente</strong></h5>
        <div class="container-fluid">
          <input type="text" readonly="" class="text-center form-control" value="{{ $request->name }}">

          <h5 class="text-center"> </h5>
       

          <br>


          <div class="card" >

            <div  class="row">
                <p class="col-sm-3 text-right" >PUESTO:</p> 
                <input type="text" class="col-sm-8" value ="{{ $request->puesto }}">


            </div>

            <div class="row">

             <p class="col-sm-3 float-left text-right" >AREA DE ADCRIPTION:</p>
             <input type="text" class="col-sm-8" value="{{ $request->adcription }}">

         </div>
         <div class="row">

             <p class="col-sm-3 text-right"> TELEFONO /EXTENCION:</p>
             <input type="text" class="col-sm-8" value="{{ $request->ext }}">

         </div>




     </div>




 </div>
 <div class="clearfix"></div>
 <br><br><br><br><br><br><br><br>

 <h5 ><strong>Datos del Expediente</strong></h5>
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
       <td><p>{{ $request->clave }}</p></td>
        
        <td><p>{{ $request->claveNombre }}</p></td>
    </tr>
    <tr>
        <td>Serie:</td>
        <td><p>{{ $request->serie }}</p></td>

        <td><p>{{ $request->serieNombre }}</p></td>
    </tr>

</tbody>
</table> 


<div class="card bg-light">
    <h6 class="content mt-4"><strong> Estado fisico del Expediente</strong></h6>
    <h6 class="content p-1 alert-info text-center">(Estos datos son llenados exclusivamente por el encargado del archivo de concentración)
    </h6>
  
    <div class="form-inline  p-1">
        <div >
         <label class="col-md-9 form-control">Estado físico: {{ $request->fisico }}</label>
        <label class="col-md-6 form-control" >No. Fojas: {{ $request->hojas }}</label>
        </div>
        
        <div>
        <label class="col ml-9 form-control" > Calidad Documental:  {{ $request->estado }}</label>
        
        
            <label class="col-md-6 form-control">Fecha de elaboración:  <mark>{{ $request->fecha }}</mark></label>
    
        </div>
        <br>
        <div class="form-group ">
            <label class="col-md-9 form-control" >Plazo del prestamo:   {{ $request->plazo }}</label>
            
        </div>
        <div class="form-group ">
            <label class="col-md-9 form-control">Prórroga:  {{ $request->prorroga }}</label>
            
        </div>

    </div>
</div>







<br>

<div class="flex-row">

    <div class="col-sm-6 text-center">
        <label class="text-center">Nombre del que recibe y firma<br><br><br><br>______________________________</label>
       
    

    </div>
    <div class="col-sm-6 text-center">
        <label class="text-center">Nombre del que entrega y firma<br><br><br><br>______________________________</label>
        
        </div>
    
</div>


        
       

</div>


</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>





