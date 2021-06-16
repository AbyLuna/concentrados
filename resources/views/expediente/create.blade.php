@extends('layouts.app')

@section('template_title')
Create Expediente
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            @includeif('partials.errors')
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Create Expediente</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('expedientes.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf
                        <form>

                            <fieldset>
                                <h5 class="col-md-4 "><strong>Información del expediente</strong></h5>
                                <div class="md-auto p-4">
                                    <label class="col-md-auto" for="signatura">Nombre de la serie:</label>
                                    <input type="text" class="form-control" id="serie" name="data[serie]"
                                        placeholder="Nombre de la serie"> <br>
                                    <label class="col-md-auto" for="signatura">Breve descripción:</label>
                                    <input type="text" class="form-control" id="serie" name="data[serie]"
                                        placeholder="Nombre de la serie">
                                    <div class="form-inline md-auto p-2"> <br> <br> <br>
                                        <label class="col-md-auto ml-1">Fecha de apertura:</label>
                                        <input type="date" name="fecha">
                                        <label class="col-md-auto ml-auto">Fecha de cierre:</label>
                                        <input type="date" name="fecha">
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('valorDocumental_id') }}
                                        <select name='valorDocumental_id' id="valorDocumental_id" class="from-control">
                                            @foreach ($valorDocumental as $key => $value)
                                            <option value="{{ $key }}"
                                                {{$suggestions_datas[0]->valorDocumental_id == $key ? "selected" : "" }}>
                                                {{ $value }}</option>
                                            @endforeach
                                    </div>

                                    <div class="form-group md-auto p-2">
                                        <label class="col-md-auto ml-auto"> Valor de la información</label>
                                        <select id="valorInformacion" class="form-control">
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="form-group md-auto p-2">
                                        <label class="col-md-auto ml-auto"> Vigencia del tramite</label>
                                        <select id="vigTramites" class="form-control">
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="form-group md-auto p-2">
                                        <label class="col-md-auto ml-auto"> Vigencia de concentración </label>
                                        <select id="vigConcentracion" class="form-control">
                                            <option></option>
                                        </select>
                                        <div class="md-auto p-4">
                                            <label class="col-md-auto" for="signatura">Total de años de vigencia del
                                                expediente:</label>
                                            <input type="text" class="form-control" id="total" name="data[total]"
                                                placeholder="Años de vigencia"> <br>
                                            <label class="col-md-auto" for="signatura">Signatura:</label>
                                            <input type="text" class="form-control" id="signatura"
                                                name="data[signatura]" placeholder="signatura">
                                            <label class="col-md-auto" for="signatura">Observaciones:</label>
                                            <input type="text" class="form-control" id="observaciones"
                                                name="data[observaciones]" placeholder="observaciones">




                                        </div>

                            </fieldset>


                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection