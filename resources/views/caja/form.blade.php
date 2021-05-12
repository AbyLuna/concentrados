<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numActa') }}
            {{ Form::text('numActa', $caja->numActa, ['class' => 'form-control' . ($errors->has('numActa') ? ' is-invalid' : ''), 'placeholder' => 'Numacta']) }}
            {!! $errors->first('numActa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numCaja') }}
            {{ Form::text('numCaja', $caja->numCaja, ['class' => 'form-control' . ($errors->has('numCaja') ? ' is-invalid' : ''), 'placeholder' => 'Numcaja']) }}
            {!! $errors->first('numCaja', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numTomosCaja') }}
            {{ Form::text('numTomosCaja', $caja->numTomosCaja, ['class' => 'form-control' . ($errors->has('numTomosCaja') ? ' is-invalid' : ''), 'placeholder' => 'Numtomoscaja']) }}
            {!! $errors->first('numTomosCaja', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('areaPert') }}
            {{ Form::text('areaPert', $caja->areaPert, ['class' => 'form-control' . ($errors->has('areaPert') ? ' is-invalid' : ''), 'placeholder' => 'Areapert']) }}
            {!! $errors->first('areaPert', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contrato_id') }}
            {{ Form::text('contrato_id', $caja->contrato_id, ['class' => 'form-control' . ($errors->has('contrato_id') ? ' is-invalid' : ''), 'placeholder' => 'Contrato Id']) }}
            {!! $errors->first('contrato_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>