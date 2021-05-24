<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre del archivo') }}
            {{ Form::text('nombreArch', $registro->nombreArch, ['class' => 'form-control' . ($errors->has('Nombre del Archivo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del archivo']) }}
            {!! $errors->first('nombreArch', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección del archivo') }}
            {{ Form::text('ubicacionArch', $registro->ubicacionArch, ['class' => 'form-control' . ($errors->has('Ubicación') ? ' is-invalid' : ''), 'placeholder' => 'Ubicación']) }}
            {!! $errors->first('ubicacionArch', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono del contacto del archivo') }}
            {{ Form::text('telefono', $registro->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono / Ext.']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo del contacto del archivo') }}
            {{ Form::text('correo', $registro->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del responsable del archivo') }}
            {{ Form::text('respNombre', $registro->respNombre, ['class' => 'form-control' . ($errors->has('respNombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del responsable']) }}
            {!! $errors->first('respNombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>