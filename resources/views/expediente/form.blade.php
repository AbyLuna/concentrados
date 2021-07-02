<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre de la serie') }}
            {{ Form::text('numSerie', $expediente->numSerie, ['class' => 'form-control' . ($errors->has('numSerie') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la serie']) }}
            {!! $errors->first('numSerie', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Breve descripción de la serie') }}
            {{ Form::text('descripcion', $expediente->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Breve descripción de la serie']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de apertura del expediente') }}
            {{ Form::text('fechaApertura', $expediente->fechaApertura, ['class' => 'form-control' . ($errors->has('fechaApertura') ? ' is-invalid' : ''), 'placeholder' => 'Fechaapertura']) }}
            {!! $errors->first('fechaApertura', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de cierre del expediente') }}
            {{ Form::text('fechaCierre', $expediente->fechaCierre, ['class' => 'form-control' . ($errors->has('fechaCierre') ? ' is-invalid' : ''), 'placeholder' => 'Fechacierre']) }}
            {!! $errors->first('fechaCierre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor documental') }}
            {{ Form::text('valorDocumental_id', $expediente->valorDocumental_id, ['class' => 'form-control' . ($errors->has('valorDocumental_id') ? ' is-invalid' : ''), 'placeholder' => 'Valor documental ']) }}
            {!! $errors->first('valorDocumental_id', '<div class="invalid-feedback">:message</p>') !!}


        <div class="form-group">
            {{ Form::label('Valor de la información') }}
            {{ Form::text('valorInformacion_id', $expediente->valorInformacion_id, ['class' => 'form-control' . ($errors->has('valorInformacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Valor de la información']) }}
            {!! $errors->first('valorInformacion_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vigencia de concentración') }}
            {{ Form::text('vigConcentracion_id', $expediente->vigConcentracion_id, ['class' => 'form-control' . ($errors->has('vigConcentracion_id') ? ' is-invalid' : ''), 'placeholder' => 'Vigconcentracion Id']) }}
            {!! $errors->first('vigConcentracion_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vigencia del tramite') }}
            {{ Form::text('vigTramite_id', $expediente->vigTramite_id, ['class' => 'form-control' . ($errors->has('vigTramite_id') ? ' is-invalid' : ''), 'placeholder' => 'Vigencia del tramite']) }}
            {!! $errors->first('vigTramite_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Total de vigencia en años') }}
            {{ Form::text('totalVigencia', $expediente->totalVigencia, ['class' => 'form-control' . ($errors->has('totalVigencia') ? ' is-invalid' : ''), 'placeholder' => 'Total vigencia en años']) }}
            {!! $errors->first('totalVigencia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Destino final') }}
            {{ Form::text('destinoFinal_id', $expediente->destinoFinal_id, ['class' => 'form-control' . ($errors->has('destinoFinal_id') ? ' is-invalid' : ''), 'placeholder' => 'Destino final ']) }}
            {!! $errors->first('destinoFinal_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Signatura del archivo') }}
            {{ Form::text('signatura', $expediente->signatura, ['class' => 'form-control' . ($errors->has('signatura') ? ' is-invalid' : ''), 'placeholder' => 'Signatura del archivo']) }}
            {!! $errors->first('signatura', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('observaciones', $expediente->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No. de contrato al que pretence el expedinte') }}
            {{ Form::text('contrato_id', $expediente->contrato_id, ['class' => 'form-control' . ($errors->has('contrato_id') ? ' is-invalid' : ''), 'placeholder' => 'Contrato Id']) }}
            {!! $errors->first('contrato_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>