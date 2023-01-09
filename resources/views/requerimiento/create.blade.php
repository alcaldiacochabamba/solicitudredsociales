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
                        <span class="card-title">FORMULARIO DE CUMPLIMIENTO DE REQUERIMIENTOS PARA LA CREACIÓN DE REDES SOCIALES DEL G.A.M.C.</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('requeri') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="mb-2 form-floating">
                                        <input class="form-control" type="text" name="unidad" id="unidad", placeholder='Unidad' >
                                        <label for="Unidad" class="form-label">Unidad :</label>
                                    </div>
                                    <div class="mb-2 form-floating">
                                        <input type="text" name="redsoc" id="redsoc", placeholder='Ingrese la Red Social' class="form-control">
                                        <label for="Red" class="form-label">Red Social :</label>
                                    </div>
                                    <div class="mb-2 form-floating">
                                        <input class="form-control" type="text" name="comu" id="comu", placeholder='Ingrese la Comunidad' >
                                        <label for="comuna" class="form-label">Comunidad</label> 
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('REQUISITOS DE CONTENIDO DE LA INFORMACIÓN') }}<br>
                                        {{ Form::label('Relevancia para la ciudadanía') }}
                                        <textarea  class="form-control" name="rele" id="rele"  rows="4"></textarea>
                                    </div>                                  
                                    <div class="form-group">
                                        {{ Form::label('REQUERIMIENTOS') }} <br>
                                        {{ Form::label('Cuenta con personal técnicamente calificado en manejo, administración en redes sociales.') }}
                                        <div class ="row"  align = "center">
                                            <div class="form-check ">
                                                <input type="radio" class="form-check-input" id="rd1" name="rd1" value="option1" checked>SI
                                                <label class="form-check-label" for="radio1"></label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="rd1" name="rd1" value="option2">NO 
                                                <label class="form-check-label" for="radio2"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Cuenta con personal técnicamente calificado en fotografía y producción au-diovisual.') }}
                                        <div class ="row" align = "center">
                                            <div class="form-check" >
                                                <input type="radio" class="form-check-input" id="rd2" name="rd2" value="option1" checked>SI
                                                <label class="form-check-label" for="radio1"></label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="rd2" name="rd2" value="option2">NO 
                                                <label class="form-check-label" for="radio2"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Cuenta con personal técnicamente calificado en diseño gráfico avanzado o in-termedio') }}
                                        <div class ="row" align = "center">
                                            <div class="form-check ">
                                                <input type="radio" class="form-check-input" id="rd3" name="rd3" value="option1" checked>SI
                                                <label class="form-check-label" for="radio1"></label>
                                            </div>
                                            <div class="form-check ">
                                                <input type="radio" class="form-check-input" id="rd3" name="rd3" value="option2">NO 
                                                <label class="form-check-label" for="radio2"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Cuenta con personal técnicamente calificado en copywriting con un conocimiento avanzado en ortografía y redacción.') }} 
                                        <div class ="row"  align = "center">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="rd4" name="rd4" value="option1" checked>SI
                                                <label class="form-check-label" for="radio1"></label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="rd4" name="rd4" value="option2">NO 
                                                <label class="form-check-label" for="radio2"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" align = "justify">
                                        {{ Form::label('El personal designado para la administración de la plataforma brindará una respuesta oportuna y eficiente a las consultas y requerimientos de la ciudadanía.') }}
                                        <div class ="row" align = "center">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="rd5" name="rd5" value="option1" checked>SI
                                                <label class="form-check-label" for="radio1"></label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="rd5" name="rd5" value="option2">NO 
                                                <label class="form-check-label" for="radio2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer mt20">
                                    <a href="/princ" class="btn btn-secondary" tabindex="3">Retorna</a>
                                    {{--  <a href="{{'/requeri'}}" class="btn btn-primary btn-sm " data-placement="left" target="_blank">Imprime</a>  --}}
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">    
@stop
    
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

@stop

