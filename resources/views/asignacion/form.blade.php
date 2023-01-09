<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('funcionario') }}
            {{ Form::text('funcionario', $asignacion->funcionario, ['class' => 'form-control' . ($errors->has('funcionario') ? ' is-invalid' : ''), 'placeholder' => 'Funcionario']) }}
            {!! $errors->first('funcionario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $asignacion->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora') }}
            {{ Form::text('hora', $asignacion->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('userid') }}
            {{ Form::text('userid', $asignacion->userid, ['class' => 'form-control' . ($errors->has('userid') ? ' is-invalid' : ''), 'placeholder' => 'Userid']) }}
            {!! $errors->first('userid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadoid') }}
            {{ Form::text('estadoid', $asignacion->estadoid, ['class' => 'form-control' . ($errors->has('estadoid') ? ' is-invalid' : ''), 'placeholder' => 'Estadoid']) }}
            {!! $errors->first('estadoid', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>