<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numSerie') }}
            {{ Form::text('numSerie', $expediente->numSerie, ['class' => 'form-control' . ($errors->has('numSerie') ? ' is-invalid' : ''), 'placeholder' => 'Numserie']) }}
            {!! $errors->first('numSerie', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $expediente->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaApertura') }}
            {{ Form::text('fechaApertura', $expediente->fechaApertura, ['class' => 'form-control' . ($errors->has('fechaApertura') ? ' is-invalid' : ''), 'placeholder' => 'Fechaapertura']) }}
            {!! $errors->first('fechaApertura', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaCierre') }}
            {{ Form::text('fechaCierre', $expediente->fechaCierre, ['class' => 'form-control' . ($errors->has('fechaCierre') ? ' is-invalid' : ''), 'placeholder' => 'Fechacierre']) }}
            {!! $errors->first('fechaCierre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valorDocumental_id') }}
            {{ Form::text('valorDocumental_id', $expediente->valorDocumental_id, ['class' => 'form-control' . ($errors->has('valorDocumental_id') ? ' is-invalid' : ''), 'placeholder' => 'Valordocumental Id']) }}
            {!! $errors->first('valorDocumental_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valorInformacion_id') }}
            {{ Form::text('valorInformacion_id', $expediente->valorInformacion_id, ['class' => 'form-control' . ($errors->has('valorInformacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Valorinformacion Id']) }}
            {!! $errors->first('valorInformacion_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vigConcentracion_id') }}
            {{ Form::text('vigConcentracion_id', $expediente->vigConcentracion_id, ['class' => 'form-control' . ($errors->has('vigConcentracion_id') ? ' is-invalid' : ''), 'placeholder' => 'Vigconcentracion Id']) }}
            {!! $errors->first('vigConcentracion_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vigTramite_id') }}
            {{ Form::text('vigTramite_id', $expediente->vigTramite_id, ['class' => 'form-control' . ($errors->has('vigTramite_id') ? ' is-invalid' : ''), 'placeholder' => 'Vigtramite Id']) }}
            {!! $errors->first('vigTramite_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('totalVigencia') }}
            {{ Form::text('totalVigencia', $expediente->totalVigencia, ['class' => 'form-control' . ($errors->has('totalVigencia') ? ' is-invalid' : ''), 'placeholder' => 'Totalvigencia']) }}
            {!! $errors->first('totalVigencia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('destinoFinal_id') }}
            {{ Form::text('destinoFinal_id', $expediente->destinoFinal_id, ['class' => 'form-control' . ($errors->has('destinoFinal_id') ? ' is-invalid' : ''), 'placeholder' => 'Destinofinal Id']) }}
            {!! $errors->first('destinoFinal_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('signatura') }}
            {{ Form::text('signatura', $expediente->signatura, ['class' => 'form-control' . ($errors->has('signatura') ? ' is-invalid' : ''), 'placeholder' => 'Signatura']) }}
            {!! $errors->first('signatura', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location_id') }}
            {{ Form::text('location_id', $expediente->location_id, ['class' => 'form-control' . ($errors->has('location_id') ? ' is-invalid' : ''), 'placeholder' => 'Location Id']) }}
            {!! $errors->first('location_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $expediente->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contrato_id') }}
            {{ Form::text('contrato_id', $expediente->contrato_id, ['class' => 'form-control' . ($errors->has('contrato_id') ? ' is-invalid' : ''), 'placeholder' => 'Contrato Id']) }}
            {!! $errors->first('contrato_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>