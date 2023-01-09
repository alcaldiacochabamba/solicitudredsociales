@extends('layouts.app')

@section('template_title')
    {{ $requerimiento->name ?? 'Show Requerimiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Requerimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('requerimientos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Funcionario:</strong>
                            {{ $requerimiento->funcionario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $requerimiento->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $requerimiento->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Userid:</strong>
                            {{ $requerimiento->userid }}
                        </div>
                        <div class="form-group">
                            <strong>Estadoid:</strong>
                            {{ $requerimiento->estadoid }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
