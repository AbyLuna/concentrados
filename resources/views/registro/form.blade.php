<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ubicacionArch') }}
            {{ Form::text('ubicacionArch', $registro->ubicacionArch, ['class' => 'form-control' . ($errors->has('ubicacionArch') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacionarch']) }}
            {!! $errors->first('ubicacionArch', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $registro->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $registro->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('respNombre') }}
            {{ Form::text('respNombre', $registro->respNombre, ['class' => 'form-control' . ($errors->has('respNombre') ? ' is-invalid' : ''), 'placeholder' => 'Respnombre']) }}
            {!! $errors->first('respNombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>