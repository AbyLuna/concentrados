<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('No. de contrato') }}
            {{ Form::text('numContrato', $contrato->numContrato, ['class' => 'form-control' . ($errors->has('numContrato') ? ' is-invalid' : ''), 'placeholder' => 'SIOP-OP-PF-060/2016-DGCYCE
            ']) }}
            {!! $errors->first('numContrato', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Área') }}
            {{ Form::text('area', $contrato->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'DGCYCE
            ']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::textarea('descripcion', $contrato->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción del contrato']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No. de tomos del expedientes') }}
            {{ Form::text('numTomosExp', $contrato->numTomosExp, ['class' => 'form-control' . ($errors->has('numTomosExp') ? ' is-invalid' : ''), 'placeholder' => '000']) }}
            {!! $errors->first('numTomosExp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No. de bitácora') }}
            {{ Form::text('bitacora', $contrato->bitacora, ['class' => 'form-control' . ($errors->has('bitacora') ? ' is-invalid' : ''), 'placeholder' => '00']) }}
            {!! $errors->first('bitacora', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::hidden('caja_id', $contrato->caja_id, ['class' => 'form-control' . ($errors->has('caja_id') ? ' is-invalid' : ''), 'placeholder' => '0']) }}
            {!! $errors->first('caja_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    <div>
</div>
     <br>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
