<!-- Styles -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portada de caja</title>
</head>
<body>
<div class="text-center ">
        <img src="/img/cabecera.png" width="777" height="auto">
        </div>
   <div class=" text-center">
        <h3><b> Secretaria de Infraestructura y Obras Publicas </b> </h3>
        <select class="btn-lg btn btn-outline-light" >
           <strong>
            <option>RECIDENCIA GENERAL ZONA SUR</option>
            <option>RECIDENCIA GENERAL ZONA NORTE</option>
            <option>RECIDENCIA GENERAL ZONA ESTE</option>
            <option>RECIDENCIA GENERAL ZONA OESTE</option>
           </strong>
        </select>
        <br>
        <select class="btn-lg btn btn-outline-light" >
            <strong>
             <option>(DGCCYCE)</option>
             <option>(DGCCYCE)</option>
             <option>(DGCCYCE)</option>
             <option>(DGCCYCE)</option>
            </strong>
         </select>
            <h5> DOCUMENTACION DEL EJERCICIO: <br>
            <input class="btn-lg btn btn-outline-ligth" type="text"  placeholder="2015">
            </h5>
        </div>
    <div class="container">
        <div>
            <h4>Número de caja:<span> <b>309/78</b> </span></h4>
            {{-- <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Número de caja</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($cajas as $cajas)
                         <tr>
                           <td>{{ $cajas->numCaja }}</td>
                    @endforeach
                </tbody>
            </table>  --}}
        </div>
       
        <br><br>
        <div class=" text-center ">
            <h4> <b> Descripción General del contenido </b></h4>
        </div>
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>EXP CTO</th>
                    <th>Descripción</th>
                    <th>Bitacora</th>
                    <th>Tomos</th>
                </tr>
            </thead>
           
            <tbody>
                 @foreach ($contratos as $contratos)
                     <tr>
                       <td>{{ $contratos->numContrato }}</td>
                       <td>{{ $contratos->descripcion }}</td>
                       <td>{{ $contratos->numTomosExp }}</td>
                       <td>{{ $contratos->bitacora }}</td>
                  </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">
            <hr style="border-color:grey;">
            <h5><font color=808080><b> VIGENCIA DOCUMENTAL </b></h5></font>
                <input class="btn-md btn btn-outline-ligth" type="text"  placeholder="Baja septiembre 2021">
                <br>
                <select class="btn-sm btn btn-outline-light" >
                    <strong>
                     <option>(PARA RESGUARDO) </option>
                     <option>(PARA ELIMINACIÓN ) </option>
                    </strong>
                 </select>
            <hr style="border-color:grey;">
            <h6><font color=808080><b> ARCHIVO DE CONCENTRACION </b></h6></font>
            <hr style="border-color:grey;">
            <div class="text-center">
        <h6> NOMBRE Y FIRMA DEL RESPONSABLE DEL ARCHIVO DE TRAMITE </h6>
        <br><br>
             <hr size=5 width="330" style="border-color:grey;">
             <strong>
             <select class="btn-md btn btn-outline-light" >
                 <option>Clementina Gadir Bautista González</option>
                 <option>Adolfo Jesús Carlos Medrano Alcazar </option>
                 <option>Alma Mariana García López </option>
                 <option>Angelina Vázquez Ramírez</option>
                 <option>Marina Marcial Hernández</option>
                 <option>Martín Rochin Márquez </option>
                 <option> Alfredo Lozano Viveros</option>
                 <option> Isabel del Carmen Morales Cabañas </option>
                 <option>Gabriela Fortuny Bojórquez</option>
                 <option> Verónica García Zarate</option>
                 <option>Edgar Noé Medina Tejeda</option>
                 <option>Aidee Adiyaret Pulgaron Áviles</option>
                 <option>Mireya Guerra Cuevas </option>
                 <option>Claudia Alarcón Libreros</option>
                 <option>Juan Alberto Tejeda Almanza</option>
                 <option>Diana Lizeth Peyrani Vázquez</option>
                 <option>Claudia Elith Aguirre Burgos </option>
                 <option>Gaudencio Portillo López</option>
                 <option>José Manuel Tirado Martínez</option>
                 <option>Rocío Rodríguez Peredo</option>
                 <option>María Isabel Martínez González</option>
                 <option>José Antonio Benítez Zaleta</option>
                 <option>Alicia Bautista Pedraza</option>
                 <option>Juan Manuel Vásquez Sánchez</option>
                 <option>Miguel Ángel Hernández Ávila</option>
                 <option>Noely Villa Villarauz</option>
                 <option>Saúl Durán Alarcón</option>
                 <option>Julio César Gómez Cortez</option>
                 <option>Ivonne Elizabeth Hernández Díaz</option>
                 <option>Lorena Yanet Benavides Villa</option>
                 <option>Marisol Vite Gómez</option>
                 <option>Mariana León Castillo</option>
                 <option>Itzel Zapata Hernández</option>
                 <option>Iván Gerardo Romandía</option>
                 <option>Guillermo Adauta Landa</option>
                 <option>Irma Ortega Pérez</option>
                </strong>
             </select>
             <br>
        </div>
    </div>
        </div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>

</html>