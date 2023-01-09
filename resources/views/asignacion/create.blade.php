@extends('adminlte::page')

@section('title', 'Red Social')

@section('content_header')
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{$mensa}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('asigna') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="causa" value="{{$id}}">
                            <div class="box box-info padding-1">
                                <div class="box-body">

                                    <div class="form-group">
                                        {{ Form::label('Unidad') }}
                                        <input type="text" name="uni" id="uni", placeholder='Ingrese la Unidad Organizacional' class="form-control">
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Red Social') }}
                                        <input type="text" name="redsoc" id="redsoc", placeholder='Ingrese la Red Social' class="form-control">
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Nombre de la comunidad') }}
                                        <input type="text" name="comu" id="comu", placeholder='Ingrese la Comunidad' class="form-control">
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('funcionario') }}
                                        {{ Form::text('funcionario', $asignacion->funcionario, ['class' => 'form-control' . ($errors->has('funcionario') ? ' is-invalid' : ''), 'placeholder' => 'Funcionario']) }}
                                        {!! $errors->first('funcionario', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Cargo') }}
                                        <input type="text" name="cgo" id="cgo", placeholder='Ingrese el Cargo del Funcionario' class="form-control">
                                    </div>
                                </div>
                                <div class="box-footer mt20">
                                    <a href="/princ" class="btn btn-secondary btn-sm" tabindex="3">Retorna</a>
                                    {{-- <a href="{{'/asignar'}}" class="btn btn-primary btn-sm " data-placement="left" target="_blank">Imprime</a>  --}}
                                    <button type="submit" class="btn btn-primary">Imprimir</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
