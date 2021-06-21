<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numContrato') }}
            {{ Form::text('numContrato', $contrato->numContrato, ['class' => 'form-control' . ($errors->has('numContrato') ? ' is-invalid' : ''), 'placeholder' => 'Numcontrato']) }}
            {!! $errors->first('numContrato', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area') }}
            {{ Form::text('area', $contrato->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</p>') !!}
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
       <div>
  <label>Id de la caja</label>

 <input readonly="" name="caja_id" class="text-center form-control" value="{{ $caja }}">
</div>
      
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>