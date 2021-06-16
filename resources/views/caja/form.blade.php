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
            {{ Form::label('numContratos') }}
            {{ Form::text('numContratos', $caja->numContratos, ['class' => 'form-control' . ($errors->has('numContratos') ? ' is-invalid' : ''), 'placeholder' => 'Numcontratos']) }}
            {!! $errors->first('numContratos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pasillo') }}
            {{ Form::text('pasillo', $caja->pasillo, ['class' => 'form-control' . ($errors->has('pasillo') ? ' is-invalid' : ''), 'placeholder' => 'Pasillo']) }}
            {!! $errors->first('pasillo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anaquel') }}
            {{ Form::text('anaquel', $caja->anaquel, ['class' => 'form-control' . ($errors->has('anaquel') ? ' is-invalid' : ''), 'placeholder' => 'Anaquel']) }}
            {!! $errors->first('anaquel', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>