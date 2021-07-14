@extends('layouts.app')
@section('template_title')
Vista Expediente
@endsection
@section('content')

<div class="container ">
    <form>
        @foreach ($expediente as $contrato)
        <section> 
            <center>
                <h2 class="text-muted">Información del expediente</h2>
            </center> 
            <a class="nav-link text-right" esto esta mal esa sintaxys  href="#">
                <img src="/img/back2.png" width="45" height="auto"> 
            </a>
           
            <div class="card">
                <div class="card-header">
                    <div class="row mb-4">
                        <div class="col-3">
                            <div class="form-outline">
                                <h5> <b>Nombre de la serie:</b></h5>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-outline">
                                <h5> {{ $contrato->numSerie }} </h5>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <div class="card-body"><br>
                    <div class="form-group row">
                        <h5><b> <label class="col-sm-auto col-form-label">Breve descripción:</label> </b></h5>
                        <div class="col-sm-10">
                            <h5 class="from-control" readonly rows="5"> {{ $contrato->descripcion }} </h5>
                        </div>
                    </div>
                </div> <br>
                <div class="card-footer "><br>
                    <div class=" form-inline">
                        <h5><b> <label class="mr-sm-2">Fecha de apertura:</label></h5></b>
                        <h4 class="form-control mb-2 mr-sm-4 col-sm-3" readonly rows="1"> {{ $contrato->fechaApertura }}
                        </h4>
                        <h5><b><label class="mr-sm-2">Fecha de cierre:</label></h5></b>
                        <h4 class="form-control mb-2 mr-sm-4 col-sm-3" readonly rows="1"> {{ $contrato->fechaCierre }}
                        </h4>
                    </div>
                </div><br>
            </div>
        </section>
        <div class="card ">
            <div class="card-header">
                <h4> <b> Valor del documento <b></h4>
            </div>
            <div class="card-body"><br>
                <div class=" form-inline">
                    <h5><b> <label class="mr-sm-4">Valor de documental:</label></h5></b>
                    <h4 class="form-control mb-2 mr-sm-4 col-sm-3" readonly rows="1">
                        {{ $contrato->valorDocumental_id }} </h4>
                    <h5><b><label class="mr-sm-4">Valor de la información:</label></h5></b>
                    <h4 class="form-control mb-2 mr-sm-4 col-sm-3" readonly rows="1">
                        {{ $contrato->valorInformacion_id }} </h4>
                </div>
            </div><br>
            <div class="card-footer text-muted">

            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4> <b> Vigencia documental<b></h4>
            </div>
            <div class="card-body">
                <div class=" form-inline">
                    <div class="container">
                        <div class="row">
                            <div class="col order-1">
                                <center>
                                    <h5 class="mr-sm-2"> <b>Vigencia en archivo de concentración:</b></h5>
                                    <h5 class="row mb-2 mr-sm-2 col-md-2" readonly rows="1">
                                        {{ $contrato->vigConcentracion_id }} </h5>
                                </center>
                            </div>
                            <div class="col order-2">
                                <center>
                                    <h5 class="mr-sm-2"><b>Vigencia en archivo de tramite:</b></h5>
                                    <h5 class="row mb-2 mr-sm-2 col-md-2" readonly rows="1">
                                        {{ $contrato->vigTramite_id }} </h5>
                                </center>
                            </div>
                            <div class="col order-12">
                                <center>
                                    <h5 class="mr-sm-2"><b> Total años:</h5></b>
                                    <h5 class="row mb-auto col-md-1" readonly rows="1"> {{ $contrato->totalVigencia }}
                                    </h5>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"><br>
                <div class=" form-inline">
                    <h5><b> <label class="mr-sm-4">Destiono final:</label></h5></b>
                    <h4 class="form-control mb-2 mr-sm-4 col-sm-3" readonly rows="1"> {{ $contrato->destinoFinal_id }}
                    </h4>
                    <h5><b><label class="mr-sm-4">Signatura:</label></h5></b>
                    <h4 class="form-control mb-2 mr-sm-4 col-sm-3" readonly rows="1"> {{ $contrato->signatura }} </h4>
                </div>
            </div><br><br><br>
            <div class="form-group row">
                <h5><b> <label class="col-sm-auto col-form-label">Observaciones:</label> </b></h5>
                <div class="col-sm-10">
                    <h5 class="from-control" readonly rows="5"> {{ $contrato->observaciones }} </h5>
                </div>
            </div><br><br>
        </div>
        <div class="jumbotron  text-center p-4">
            © 2021 Derechos reservados Departamento de Tecnologías de la Información
        </div>
</div>
</div>
@endforeach
</form>
</div>






















@endsection
