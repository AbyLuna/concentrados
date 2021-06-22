<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Acta/No.caja') }}
            {{ Form::text('numActa', $caja->numActa, ['class' => 'form-control' . ($errors->has('numActa') ? ' is-invalid' : ''), 'placeholder' => '0901']) }}
            {!! $errors->first('numActa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No.caja') }}
            {{ Form::text('numCaja', $caja->numCaja, ['class' => 'form-control' . ($errors->has('numCaja') ? ' is-invalid' : ''), 'placeholder' => '01']) }}
            {!! $errors->first('numCaja', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No. de tomos en caja') }}
            {{ Form::text('numTomosCaja', $caja->numTomosCaja, ['class' => 'form-control' . ($errors->has('numTomosCaja') ? ' is-invalid' : ''), 'placeholder' => '000']) }}
            {!! $errors->first('numTomosCaja', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No. de bitacoras en caja') }}
            {{ Form::text('numBitacora', $caja->numBitacora, ['class' => 'form-control' . ($errors->has('numBitacora') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
            {!! $errors->first('numBitacora', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pasillo') }}
            {{ Form::text('pasillo', $caja->pasillo, ['class' => 'form-control' . ($errors->has('pasillo') ? ' is-invalid' : ''), 'placeholder' => 'No. pasillo']) }}
            {!! $errors->first('pasillo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Anaquel') }}
            {{ Form::text('anaquel', $caja->anaquel, ['class' => 'form-control' . ($errors->has('anaquel') ? ' is-invalid' : ''), 'placeholder' => 'No. anaquel']) }}
            {!! $errors->first('anaquel', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>