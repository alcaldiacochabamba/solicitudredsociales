<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('empleado_ega') }}
            {{ Form::text('empleado_ega', $transferencia->empleado_ega, ['class' => 'form-control' . ($errors->has('empleado_ega') ? ' is-invalid' : ''), 'placeholder' => 'Empleado Ega']) }}
            {!! $errors->first('empleado_ega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('empleado_ing') }}
            {{ Form::text('empleado_ing', $transferencia->empleado_ing, ['class' => 'form-control' . ($errors->has('empleado_ing') ? ' is-invalid' : ''), 'placeholder' => 'Empleado Ing']) }}
            {!! $errors->first('empleado_ing', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $transferencia->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora') }}
            {{ Form::text('hora', $transferencia->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('userid') }}
            {{ Form::text('userid', $transferencia->userid, ['class' => 'form-control' . ($errors->has('userid') ? ' is-invalid' : ''), 'placeholder' => 'Userid']) }}
            {!! $errors->first('userid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadoid') }}
            {{ Form::text('estadoid', $transferencia->estadoid, ['class' => 'form-control' . ($errors->has('estadoid') ? ' is-invalid' : ''), 'placeholder' => 'Estadoid']) }}
            {!! $errors->first('estadoid', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>