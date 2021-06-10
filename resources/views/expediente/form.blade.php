<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre de la serie') }}
            {{ Form::text('numSerie', $expediente->numSerie, ['class' => 'form-control' . ($errors->has('numSerie') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la serie']) }}
            {!! $errors->first('numSerie', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de apertura') }}
            {{ Form::text('fechaApertura', $expediente->fechaApertura, ['class' => 'form-control' . ($errors->has('fechaApertura') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de apertura']) }}
            {!! $errors->first('fechaApertura', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de cierre') }}
            {{ Form::text('fechaCierre', $expediente->fechaCierre, ['class' => 'form-control' . ($errors->has('fechaCierre') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de cierre']) }}
            {!! $errors->first('fechaCierre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ValorDocumental_id') }}
            {{ Form::text('valorDocumental_id', $expediente->valorDocumental_id, ['class' => 'form-control' . ($errors->has('valorDocumental_id') ? ' is-invalid' : ''), 'placeholder' => 'Valor Documental Id']) }}
            {!! $errors->first('valorDocumental_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valorInformacion_id') }}
            {{ Form::text('valorInformacion_id', $expediente->valorInformacion_id, ['class' => 'form-control' . ($errors->has('valorInformacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Valor Informacion Id']) }}
            {!! $errors->first('valorInformacion_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vigConcentracion_id') }}
            {{ Form::text('vigConcentracion_id', $expediente->vigConcentracion_id, ['class' => 'form-control' . ($errors->has('vigConcentracion_id') ? ' is-invalid' : ''), 'placeholder' => 'Vigencia concentracion Id']) }}
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
            {{ Form::label('Signatura') }}
            {{ Form::text('signatura', $expediente->signatura, ['class' => 'form-control' . ($errors->has('signatura') ? ' is-invalid' : ''), 'placeholder' => 'Signatura']) }}
            {!! $errors->first('signatura', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location_id') }}
            {{ Form::text('location_id', $expediente->location_id, ['class' => 'form-control' . ($errors->has('location_id') ? ' is-invalid' : ''), 'placeholder' => 'Ubicación']) }}
            {!! $errors->first('location_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('observaciones', $expediente->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>