<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numContrato') }}
            {{ Form::text('numContrato', $contrato->numContrato, ['class' => 'form-control' . ($errors->has('numContrato') ? ' is-invalid' : ''), 'placeholder' => 'Numcontrato']) }}
            {!! $errors->first('numContrato', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $contrato->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numTomosExp') }}
            {{ Form::text('numTomosExp', $contrato->numTomosExp, ['class' => 'form-control' . ($errors->has('numTomosExp') ? ' is-invalid' : ''), 'placeholder' => 'Numtomosexp']) }}
            {!! $errors->first('numTomosExp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bitacora') }}
            {{ Form::text('bitacora', $contrato->bitacora, ['class' => 'form-control' . ($errors->has('bitacora') ? ' is-invalid' : ''), 'placeholder' => 'Bitacora']) }}
            {!! $errors->first('bitacora', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expediente_id') }}
            {{ Form::text('expediente_id', $contrato->expediente_id, ['class' => 'form-control' . ($errors->has('expediente_id') ? ' is-invalid' : ''), 'placeholder' => 'Expediente Id']) }}
            {!! $errors->first('expediente_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>