@extends('layouts.app')

@section('template_title')
    {{ $transferencia->name ?? 'Show Transferencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Transferencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('transferencias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empleado Ega:</strong>
                            {{ $transferencia->empleado_ega }}
                        </div>
                        <div class="form-group">
                            <strong>Empleado Ing:</strong>
                            {{ $transferencia->empleado_ing }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $transferencia->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $transferencia->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Userid:</strong>
                            {{ $transferencia->userid }}
                        </div>
                        <div class="form-group">
                            <strong>Estadoid:</strong>
                            {{ $transferencia->estadoid }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
