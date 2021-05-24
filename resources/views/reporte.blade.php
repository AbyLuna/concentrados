@extends('layouts.app')
@section('content')
<body>
    <div class="container">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white fondo-nav sticky-top">
                <img src="/img/cabecera.png" width="auto" height="auto">
                <a class="btn btn-outline-secondary ml-auto " href="#">
                    <img src="/img/caja.png" width="35" height="auto" />Registro de caja</a>
            </nav>
            <h2 class="row justify-content-center p-2">Vale de Prestamo de documentación en archivo de Concentración
            </h2>
            <fosrm>
                <fieldset>
                    <div class="row justify-content-end  p-2">
                        <input type="text" placeholder="No. de préstamo">
                    </div>
                    <fieldset>
                        <h5 class="col-md-6 "><strong>Datos del solicitante</strong></h5>
                        <div class="form-inline md-auto p-2">
                            <label class="col-md-auto" for="signatura">No. Oficio de Solicitud:</label>
                            <input type="text" class="form-control" id="oficio" name="data[oficio]"
                                placeholder="No. Oficio de Solicitud">
                            <label class="col-md-auto ml-4" for="pasillo">Fecha de elaboración:</label>
                            <input type="date" name="fecha">
                        </div>
                        <div class="form-group  p-2">
                            <label for="rat">Nombre del RAT:</label>
                            <input type="text" class="form-control" id="rat" name="data[rat]"
                                placeholder="Nombre del RAT">
                        </div>
                        <h5><strong>Datos del Jefe del área quien solicita el Expediente</strong></h5>
                        <div class="form-group md-auto p-2">
                            <label for="jefeSolicitante">Nombre del jefe solicitante:</label>
                            <input class="form-control" type="text" placeholder="Nombre del jefe solicitante">
                        </div>
                        <div class="form-group  p-2">
                            <label for="puesto">Puesto:</label>
                            <input class="form-control" type="text" placeholder="Puesto">
                        </div>
                        <div class="form-group p-2">
                            <label for="nprestamo">Área de Adcripción:</label>
                            <input class="form-control" type="text" placeholder="Área de Adcripción">
                        </div>
                        <div class="form-group p-2">
                            <label for="nprestamo">Teléfono y/o Ext.:</label>
                            <input class="form-control" type="text" placeholder="Teléfono y/o Ext.">
                        </div>
                    </fieldset>

                    <fieldset>
                        <h5><strong>Datos del Expediente</strong></h5>
                        <div class="form-inline md-auto p-2">
                            <label class="col-md-auto" for="serie">Clave de la sección</label>
                            <input type="text" class="form-control" id="claveSecc" name="data[claveSecc]"
                                placeholder="Clave de la secciòn">
                            <label class="col-md-auto ml-4" for="serie">Nombre de la sección</label>
                            <input type="text" class="form-control" id="nomSecc" name="data[nomSecc]"
                                placeholder="Nombre de la secciòn">
                        </div>
                        <div class="form-inline md-auto p-2">
                            <label class="col-md-auto" for="serie"> Clave de la serie</label>
                            <input type="text" class="form-control" id="claveSecc" name="data[claveSecc]"
                                placeholder="   Clave de la secciòn">
                            <label class="col-md-auto ml-4" for="serie">Nombre de la serie</label>
                            <input type="text" class="form-control" id="nomSecc" name="data[nomSecc]"
                                placeholder="Nombre de la secciòn">
                        </div>

                        <h5><strong>Contenido del Expediente</strong></h5>
                        <div class="form-group md-auto p-2">
                            <label for="observacion">Contenido del Expediente</label>
                            <textarea id="observacion" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="form-inline md-auto p-2">
                            <label class="col-md-auto" for="numActa">No. de Acta</label>
                            <input type="text" class="form-control" id="numActa" name="data[numActa]"
                                placeholder="No. de Acta">
                            <label class="col-md-auto ml-4" for="numTomos">No. de tomos</label>
                            <input type="text" class="form-control" id="numTomos" name="data[nomTomos]"
                                placeholder="No. de tomos">
                        </div>
                    </fieldset>
                    <fieldset>
                        <h5 class="content mt-4"><strong> Estado fisico del Expediente</strong></h5>
                        <h6 class="content p-1">(Estos datos son llenados exclusivamente por el encargado del archivo de
                            concentración)
                        </h6>
                        <div class="form-group">
                            <label for="nprestamo">Estado físico</label>
                            <input type="text" class="form-control" id="nprestamo" name="data[nprestamo]"
                                placeholder="Estado físico">
                        </div>
                        <div class="form-inline md-auto p-1">
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
                                <label class="col-md-auto ml-4" for="nprestamo">Plazo del prestamo</label>
                                <input type="text" class="form-control" id="nprestamo" name="data[nprestamo]"
                                    placeholder="Plazo del prestamo">
                            </div>
                            <div class="form-group p-2">
                                <label class="col-md-auto ml-4" for="nprestamo">Prórroga</label>
                                <input type="text" class="form-control" id="nprestamo" name="data[nprestamo]"
                                    placeholder="Prórroga">
                            </div>
                            <div class="form-group p-2">
                                <label for="observacion">Observaciones</label>
                                <textarea id="observacion" class="form-control" rows="2"></textarea>
                            </div>
                    </fieldset>
                    <div class="form-group">
                        <label for="nprestamo">Nombre del que recibe y firma</label>
                        <textarea id="observacion" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nprestamo">Nombre del que entrega y firma</label>
                        <textarea id="observacion" class="form-control" rows="4"></textarea>
                    </div>
                    <button class="btn btn-success" type="button">Guardar</button>
                    <button class="btn btn-secondary" type="button">Imprimir</button>
        </div>
        </fieldset>

        </form>


    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

@endsection