<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Acta/No. Caja') }}
            {{ Form::text('numActa', $caja->numActa, ['class' => 'form-control' . ($errors->has('numActa') ? ' is-invalid' : ''), 'placeholder' => 'Acta/No. Caja']) }}
            {!! $errors->first('numActa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No. Caja') }}
            {{ Form::text('numCaja', $caja->numCaja, ['class' => 'form-control' . ($errors->has('numCaja') ? ' is-invalid' : ''), 'placeholder' => 'No. Caja']) }}
            {!! $errors->first('numCaja', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No. de tomos de la caja') }}
            {{ Form::text('numTomosCaja', $caja->numTomosCaja, ['class' => 'form-control' . ($errors->has('numTomosCaja') ? ' is-invalid' : ''), 'placeholder' => 'No. de tomos de la caja']) }}
            {!! $errors->first('numTomosCaja', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Área a la que pertenece') }}
            {{ Form::text('areaPert', $caja->areaPert, ['class' => 'form-control' . ($errors->has('areaPert') ? ' is-invalid' : ''), 'placeholder' => 'Área a la que pertenece']) }}
            {!! $errors->first('areaPert', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>