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






 <h4 class="page-header text-center">Vale de Prestamo de documentación en archivo de Concentració</h4>


 <p class="text-right ">
    Numero De Solicitud: <mark class="text-right">{{ $request->numero }}</mark>
</p>




<h4 class="text-center bg-primary"><strong>Datos del Jefe del área quien solicita el Expediente</strong></h4>
<div class="container">
 <p class="mark text-center">Nombre del Jefe de Area<br><mark>{{ $request->name }}</mark> </p>        

  

   
    <div class="row">
    <p class="col-sm-4" ><strong>Fecha de Solicitud:</strong>  {{ $request->fechaSolicituud }}</p>
    <p class="col-sm-6 "><strong>Nombre del RAT:</strong>  {{ $request->rat }}</p>
</div>  
</div>
<br><br><br>
<br>

<div class="container row " >

    <div  class="col-sm-4">
        <p><strong>PUESTO:</strong><p>
        <p>{{ $request->puesto }} </p>


    </div>

    <div class="col-sm-4">

     <p ><strong>AREA DE ADSCRIPTION:</strong></p>

     <p>{{ $request->adcription }}</p>
 </div>
 <div class="col-sm-4">

     <p><strong>TELEFONOS/EXTENCION:</strong></p>
     <p>{{ $request->ext }}</p>

 </div>

</div>



</div>
<div class="clearfix"></div>
<br><br><br><br><br><br><br><br>
<br><br><br><br>
<h4 class="text-center bg-primary"><strong>Datos del Expediente</strong></h4>
<table class="table table-bordered p-2">

    <thead>


        <tr>
            <th>Acta</th>
            <th>Caja</th>
            <th>Serie</th>
            <th>Tomo</th>
        </tr>
    </thead>
    <tbody>



        @foreach($request->acta as $key=>$value)

        <tr>  

         <td>{{  $request->acta[$key] }}</td>              
         <td>{{  $request->caja[$key] }}</td>              
         <td>{{  $request->serie[$key] }} </td>  
         <td>{{ $request->tomo[$key] }}</td>
     </tr>

     @endforeach


     </tbody>
</table> 


<div class="container bg-light">
    <h4 class="text-center bg-primary"><strong> Estado fisico del Expediente</strong></h4>
    <h6 class="content p-1 alert-info text-center">(Se solicita al ‘RAT’, notifique a este archivo cualquier préstamo a terceros. Cabe señalar que el préstamo motivo de este formato, se extiende por los siguientes 30 días naturales, por lo que documentos prestados deberán regresar a este archivo. Así mismo se informa que, si al termino del plazo es necesario para su área contar con los expedientes más tiempo, el titular deberá solicitar una prorroga por escrito hasta por 30 días naturales, con un máximo de 4 prorrogas.)
    </h6>

    <div class="form-inline  p-1">
        <div class="col-sm-3">
        
         <P ><strong>No. Folios: </strong> {{ $request->folios }}</P>
     </div>

     <div class="col-sm-3">
        <p  ><strong> Calidad Documental:</strong>  {{ $request->estado }}</p>
      </div>
      <div class="col-sm-4">
          
  <p><strong>Fecha de Prestamo:</strong> {{ $request->fecha }}</p>

      </div>
      </div><br>
    
    <div class="form-inline">

    <div class="col-sm-4">
        <p><strong>Plazo del prestamo:</strong>   {{ $request->plazo }}<p>

    </div>
    <div class="col-sm-4">
        <p ><strong>Prórroga:</strong>  {{ $request->prorroga }}</p>

    </div>
</div><br><br>  
  <div class="input-group-prepend">
    <p class="input-group-text"><strong>OBSERVACIONES:</strong></p>
  </div>
  <input class="col-sm-12 form-control" type="text" value="{{ $request->observaciones }}" disabled=""  >
</div>
<br><br><br><br>







<br><br><br><br><br>
<br><br><br><br><br>

<div class="row">

    <div class="col-sm-7 text-center">
        <label><br><br><br><br>______________________________<br>
       Nombre y Firma del RAT.</label>



    </div>
    <div class="col-sm-5 text-center">
        <label><br><br><br><br>______________________________<br>
        Nombre y Firma de quien entrega.</label>
        
    </div>
    
</div>





</div>


</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>





