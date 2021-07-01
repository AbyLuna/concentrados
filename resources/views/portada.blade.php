<!-- Styles -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portada de caja</title>
</head>
<body>
<div class="text-center container ">
        <img src="/img/cabecera.png" width="777" height="auto">
        <h2><b> Secretaria de Infraestructura y Obras Publicas </b> </h2>
        <div class="container text-center">
               <h1>  <b>309/78</b> </h1>
                 <table class="table table-striped">
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
                </table>  
                        
         </div>
         <select  class="btn-lg btn btn-outline-light" >
              <strong>
                 <option>(DGCCYCE)</option>
                 <option>(DGCCYCE)</option>
                  <option>(DGCCYCE)</option>
                  <option>(DGCCYCE)</option>
              </strong><br>
         </select>
            <h4> DOCUMENTACION DEL EJERCICIO: <br>
            <input class="btn-lg btn btn-outline-ligth" type="text"  placeholder="2015">
            </h4>
         <div class=" text-center "><br><br>
            <h3> <b> Descripción General del contenido </b></h3>
               <hr style="border-color:grey;">
                    <select class="btn-lg btn btn-outline-light" style="color:rgb(0, 0, 0)">
                        {{-- name="seleccion" size="1" style="width:700px" --}}
                               <option >SECRETARIO PARTICULAR</option>
                               <option> DIRECCIÓN GENERAL JURÍDICA</option>
                               <option>SUBDIRECCIÓN JURÍDICA DE LO CONTENCIOSO</option>
                               <option>OFICINA DE ASUNTOS CONTENCIOSOS Y PENALES</option>
                               <option>OFICINA DE ASUNTOS LABORALES Y PROCESOS ADTVOS</option>
                               <option>SUBDIRECCIÓN JURÍDICA DE CONTRATOS Y RESCISIONES</option>
                               <option>OFICINA DE CONTRATOS </option>
                               <option>OFICINA DE RESCISIONES</option>
                               <option> UNIDAD ADMINISTRATIVA</option>
                               <option>DEPARTAMENTO DE RECURSOS HUMANOS</option>
                               <option> OFICINA DE NÓMINA</option>
                               <option> OFICINA DE ADMINISTRACIÓN DE PERSONAL</option>
                               <option> OFICINA DE DESARROLLO ORGANIZACIONAL</option>
                               <option> DEPARTAMENTO DE RECURSOS FINANCIEROS</option>
                               <option> OFICINA DE CONTROL DE EGRESOS</option>
                               <option> OFICINA DE CONTABILIDAD</option>
                               <option> OFICINA DE PROGRAMACIÓN Y PRESUPUESTACIÓN</option>
                               <option> OFICINA DE CONTROL FINANCIERO DE OBRA</option>
                              <option> DEPARTAMENTO DE RECURSOS MATERIALES Y SERVICIOS GENERALES</option>
                              <option> OFICINA DE ADQUISICIONES</option>
                              <option> OFICINA DE CONTROL VEHÍCULAR</option>
                              <option> OFICINA DE CONTROL DE INVENTARIOS</option>
                              <option> OFICINA DE SERVICIOS GENERALES</option>
                              <option> DEPARTAMENTO DE TECNOLOGÍAS DE LA INFORMACIÓN</option>
                              <option> OFICINA DE GOBIERNO ELECTRÓNICO Y DESARROLLO DE APLICACIONES</option>
                              <option> OFICINA DE INFRAESTRUCTURA Y SOPORTE TÉCNICO</option>
                              <option> DEPARTAMENTO DE ARCHIVO GENERAL</option>
                              <option>  UNIDAD DE LICITACIONES</option>
                              <option> OFICINA DE ANÁLISIS TÉCNICO ECONÓMICO</option>
                              <option>  OFICINA DE LICITACIONES</option>
                              <option> OFICINA DE ESTUDIOS DE MERCADO</option>
                              <option>  UNIDAD DE TRANSPARENCIA</option>
                              <option>  UNIDAD DE GÉNERO</option>
                              <option>  SUBSECRETARÍA DE INFRAESTRUCTURA</option>
                              <option>DIRECCIÓN GENERAL DE PROYECTOS, PROGRAMACIÓN Y PRESUPUESTO DE CAMINOS Y CARRETERAS ESTATALES</option>
                              <option> SUBDIRECCIÓN DE PLANEACIÓN, PROGRAMACIÓN Y PRESUPUESTACIÓN DE OBRA </option>
                              <option>   DEPARTAMENTO DE PLANEACIÓN DE OBRA</option>
                              <option>   DEPARTAMENTO DE PROGRAMACIÓN Y PRESUPUESTACIÓN DE OBRA</option>
                              <option> DEPARTAMENTO DE SEGUIMIENTO Y EVALUACIÓN DE OBRA</option>
                              <option>  SUBDIRECCIÓN DE PRESUPUESTOS DE CARRETERAS Y CAMINOS ESTATALES</option>
                              <option>  DEPARTAMENTO DE CONTROL Y REGISTRO DE INFORMACIÓN</option>
                              <option> DEPARTAMENTO DE LIBROS BLANCOS Y AUDITORÍAS</option>
                              <option> DIR. GRAL. DE CONSTRUCCIÓN DE CAMINOS Y CARRETERAS ESTATALES</option>
                              <option>  SUBDIRECCIÓN DE CONSTRUCCIÓN DE CAMINOS Y CARRETERAS ESTATALES</option>
                              <option>  RESIDENCIA GENERAL DE CONSTRUCCIÓN DE CARRETERAS ZONA NORTE</option>
                              <option>  RESIDENCIA GENERAL DE CONSTRUCCIÓN DE CARRETERAS ZONA CENTRO</option>
                              <option> RESIDENCIA GENERAL DE CONSTRUCCIÓN DE CARRETERAS ZONA SUR</option>
                              <option> SUBDIRECCIÓN DE CONTROL, SEGUIMIENTO DE CONST. DE CAMINOS Y CTRA.</option>
                              <option>  DEPARTAMENTO DE SEGUIMIENTO OPERATIVO</option>
                              <option>  DEPARTAMENTO DE CONTROL DE OBRA</option>
                              <option> DEPARTAMENTO DE ESTIMACIONES</option>
                              <option> SUBDIRECCIÓN DE MAQUINARIA</option>
                              <option> DEPARTAMENTO TÉCNICO DE MAQUINARIA</option>
                              <option> DEPARTAMENTO DE CONTROL DE MAQUINARIA</option>
                              <option>  DEPARTAMENTO DE MANTENIMIENTO DE MAQUINARIA</option>
                              <option> SUBSECRETARIA DE OBRAS PÚBLICAS Y COMUNICACIONES</option>
                              <option>  DIRECCIÓN GENERAL DE PROYECTOS, PROGRAMACIÓN Y PPTO DE OBRAS PÚBLICAS</option>
                              <option> SUBDIRECCIÓN DE PREINVERSIÓN Y EVALUACIÓN DE OBRA PÚBLICA</option>
                              <option> DEPARTAMENTO DE INTEGRACIÓN DE PROYECTOS Y OBRAS PÚBLICAS</option>
                              <option> DEPARTAMENTO DE INTEGRACIÓN DE PROYECTOS DE EDIFICACIÓN</option>
                              <option>  DEPTO. DE CONTROL DE EVALUACIÓN DE PROGRAMAS OPERATIVOS DE INVERSIÓN</option>
                              <option>  SUBDIRECCIÓN DE PRESUPUESTOS DE OBRAS PÚBLICAS</option>
                              <option> DEPARTAMENTO DE COSTOS DE EDIFICACIÓN</option>
                              <option>  DEPARTAMENTO DE SEGUIMIENTO Y CONTROL PRESUPUESTAL</option>
                              <option>  DIRECCIÓN GENERAL DE CONSTRUCCIÓN DE OBRAS PÚBLICAS</option>
                              <option>  SUBDIRECCIÓN DE CONSTRUCCIÓN DE OBRAS PÚBLICAS</option>
                              <option>  DEPARTAMENTO DE CONSTRUCCIÓN ZONA NORTE</option>
                              <option>  DEPARTAMENTO DE CONSTRUCCIÓN ZONA CENTRO</option>
                              <option> DEPARTAMENTO DE CONSTRUCCIÓN ZONA SUR</option>
                              <option>  DEPARTAMENTO DE ESTIMACIONES</option>
                              <option> SUBDIR. DE PROGRAMACIÓN, CONTROL Y EVALUACIÓN  TÉC. DE OBRAS PÚBLICAS</option>
                              <option> DEPARTAMENTO DE SEGUIMIENTO OPERATIVO</option>
                              <option> DEPARTAMENTO DE CONTROL DE OBRA</option>
                              <option>  DEPARTAMENTO DE SUPERVISIÓN DE OBRA</option>
                              <option>  DIRECCIÓN GENERAL DE TELECOMUNICACIONES Y DESARROLLO DE VÍAS DE COMUNICACIÓN</option>
                              <option> SUBDIRECCIÓN DE TELECOMUNICACIONES</option>
                              <option> DEPARTAMENTO DE PROGRAMACIÓN Y PROYECTOS</option>
                              <option> DEPARTAMENTO DE ENLACES DE TELECOMUNICACIONES</option>
                              <option> SUBDIRECCIÓN DE VÍAS DE COMUNICACIÓN</option>
                              <option> DEPARTAMENTO DE DESARROLLO DE PUERTOS</option>
                              <option>  DEPARTAMENTO DE DESARROLLO FERROVIARIO</option>
                              <option> COORDINACIÓN DE PLANEACIÓN Y EVALUACIÓN TÉCNICA</option>
                              <option> DEPARTAMENTO DE CONTROL DE CALIDAD Y EVALUACIÓN TÉCNICA</option>
                              <option>  DEPARTAMENTO DE VENTANILLA ÚNICA</option>
                              <option> DEPARTAMENTO DE PLANEACIÓN Y EVALUACIÓN DE PROGRAMAS</option>
                              <option> OFICINA DE ANÁLISIS E INTEGRACIÓN DE INFORMACIÓN</option>
                              <option>OFICINA DE SEGUIMIENTO DE PROGRAMAS ESTATALES Y FEDERALES</option>
                              <option> COORDINACIÓN SECTORIAL FONDEN</option>
                          <hr style="border-color:grey;"> 
                      </select>     
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
            <hr style="border-color:grey;">
 
           </table>
          <div class="text-center">
            <hr style="border-color:grey;">
            <h4><font color=black><b> VIGENCIA DOCUMENTAL </b></h4></font>
                <input class="btn-md btn btn-outline-ligth" type="text"  placeholder="Baja septiembre 2021">
                <br>
                <select class="btn-sm btn btn-outline-light" >
                    <strong>
                     <option>(PARA RESGUARDO) </option>
                     <option>(PARA ELIMINACIÓN ) </option>
                    </strong>
                 </select>
                 <hr style="border-color:grey;">
                 <h6 style=" color:black;"s><b> ARCHIVO DE CONCENTRACION </b></h6></>
                 <hr style="border-color:grey;">    
            <div class="text-center">
           <h5> NOMBRE Y FIRMA DEL RESPONSABLE DEL ARCHIVO DE TRAMITE </h5>
           <br><br>
             <hr size=5 width="333" style="border-color:grey;">
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