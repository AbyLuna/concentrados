<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('pasillo') }}
            {{ Form::text('pasillo', $location->pasillo, ['class' => 'form-control' . ($errors->has('pasillo') ? ' is-invalid' : ''), 'placeholder' => 'Pasillo']) }}
            {!! $errors->first('pasillo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anaquel') }}
            {{ Form::text('anaquel', $location->anaquel, ['class' => 'form-control' . ($errors->has('anaquel') ? ' is-invalid' : ''), 'placeholder' => 'Anaquel']) }}
            {!! $errors->first('anaquel', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $location->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>