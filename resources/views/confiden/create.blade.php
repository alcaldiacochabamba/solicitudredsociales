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
                        <span class="card-title">COMPROMISO DE BUEN USO Y CONFIDENCIALIDAD</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('confi') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="form-group">
                                        {{ Form::label('funcionario') }}
                                        {{ Form::text('funcionario', $confiden->funcionario, ['class' => 'form-control' . ($errors->has('funcionario') ? ' is-invalid' : ''), 'placeholder' => 'Funcionario']) }}
                                        {!! $errors->first('funcionario', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('Carnet de Identidad') }}
                                        <input type="text" name="ci" id="ci", placeholder='Ingrese el Carnet de Identidad' class="form-control">
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('EXTENDIDO') }}
                                        <select class="form-control" name="ext" id="ext">
                                            <option value="1">La Paz</option>
                                            <option value="2">Santa Cruz</option>
                                            <option value="3">Cochabamba</option>
                                            <option value="4">Oruro</option>
                                            <option value="5">Chuquisaca</option>
                                            <option value="6">Potosi</option>
                                            <option value="7">Tarija</option>
                                            <option value="8">Pando</option>
                                            <option value="9">Beni</option>
                                        </select> 
                                    </div>
                                    
                                    <div class="form-group">
                                        {{ Form::label('Cargo') }}
                                        <input type="text" name="cgo" id="cgo", placeholder='Ingrese el Cargo del Funcionario' class="form-control">
                                    </div>
                                </div>
                                <div class="box-footer mt20">
                                    <a href="/princ" class="btn btn-secondary btn-sm " tabindex="3">Retorna</a>
                                    {{-- <a href="{{'/confid'}}" class="btn btn-primary btn-sm " data-placement="left" target="_blank">Imprime</a> --}}
                                    <button type="submit" class="btn btn-primary" data-placement="left" target="_blank">Imprimir</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
