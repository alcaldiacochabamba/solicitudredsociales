@extends('adminlte::page')

@section('plugins.datatable-boostrap', true)
@section('plugins.dropzone', true)
@section('title', 'RedSOCIAL')

@section('content_header')

    <h1 align = "center">BIENVENIDO AL SISTEMA</h1>
    <h4 align = "center">PARA MANEJO DE ADMINISTRACION DE REDES SOCIALES</h4>

@endsection


@section('content')
{{--<a class='testClick' href='http://adsl.org.mx'>enlace 1</a>
<a class='testClick' href='http://google.com'>enlace 2</a>
--}}

@php
    use App\Models\Requerimiento; 
    use App\Models\asignacion;
    use App\Models\transferencia;
    use App\Models\confiden;
    $reque = Requerimiento::where('estadoid','=',1)->count();
    $asig = Asignacion::where('estadoid','=',1)->count();
    $tran = Transferencia::where('estadoid','=',1)->count();
@endphp

<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="height: 770px; width: 100%">
                <div class="card-body">

                    <div class="row">       {{--  tarjetas --}}
                        <div class="col-md-4 col-xl-4">
                            <div class="card bg-purple order-car">
                                <div class="card-blok">
                                    <p class="m-b-0 text-center"><a href="/requerimientos/create" class="text-white">FORMULARIO DE CUMPLIMIENTO DE REQUERIMIENTOS PARA LA CREACIÓN DE REDES SOCIALES DEL G.A.M.C</a></p>
                                    <h2 class="text-center"><i class="fa fa-user f-left"></i></h2>
                                    
                                </div>
                            </div>     
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="card bg-purple order-car">
                                <div class="card-blok">
                                    <p class="m-b-0 text-center"><a href="/asignacions/create" class="text-white">CREAR ASIGNACION DE ROLES EN REDES SOCIALES INSTITUCIONALES</a></p>
                                    <h2 class="text-center"><i class="fa fa-cog fa-fw f-left"></i></h2>
                                </div>
                            </div>     
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="card bg-green order-car">
                                <div class="card-blok">
                                    <p class="m-b-0 text-center"><a href="/asignacions/create/2" class="text-white">CREAR REMOCIÓN DE ROLES EN REDES SOCIALES INSTITUCIONALES</a></p>
                                    <h2 class="text-center"><i class="fa fa-cog fa-fw f-left"></i></h2>
                                </div>
                            </div>     
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="card bg-green order-car">
                                <div >
                                    <p class="m-b-0 text-center"><a href="/confidens/create" class="text-white">COMPROMISO DE BUEN USO Y CONFIDENCIALIDAD</a></p>
                                    <h2 class="text-center"><i class="fas fa-fw fa-credit-card f-left"></i></h2>
                                </div>
                            </div>     
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="card bg-pink order-car">
                                <div class="card-blok">
                                    <p class="m-b-0 text-center"><a href="/transferencias/create" class="text-white">ACTA DE TRANSFERENCIA DE REDES SOCIALES</a></p>
                                    <h2 class="text-center"><i class="fas fa-fw fa-credit-card f-left"></i></h2>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet"> 

@stop


@section('js')
    <script> console.log('Hi!'); </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script> 

@stop


