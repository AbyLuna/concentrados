<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('No. de la caja') }}
            {{ Form::text('numCaja', $location->numCaja, ['class' => 'form-control' . ($errors->has('numCaja') ? ' is-invalid' : ''), 'placeholder' => 'No. de la caja']) }}
            {!! $errors->first('numCaja', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pasillo') }}
            {{ Form::text('pasillo', $location->pasillo, ['class' => 'form-control' . ($errors->has('pasillo') ? ' is-invalid' : ''), 'placeholder' => 'Pasillo']) }}
            {!! $errors->first('pasillo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Anaquel') }}
            {{ Form::text('anaquel', $location->anaquel, ['class' => 'form-control' . ($errors->has('anaquel') ? ' is-invalid' : ''), 'placeholder' => 'Anaquel']) }}
            {!! $errors->first('anaquel', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>