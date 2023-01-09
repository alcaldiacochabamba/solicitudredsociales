@extends('layouts.app')

@section('template_title')
    {{ $confiden->name ?? 'Show Confiden' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Confiden</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('confidens.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Funcionario:</strong>
                            {{ $confiden->funcionario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $confiden->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $confiden->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Userid:</strong>
                            {{ $confiden->userid }}
                        </div>
                        <div class="form-group">
                            <strong>Estadoid:</strong>
                            {{ $confiden->estadoid }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
