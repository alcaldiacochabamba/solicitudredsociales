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
                        <span class="card-title">ACTA DE TRANSFERENCIA DE REDES SOCIALES</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('transfer') }}" role="form" enctype="multipart/form-data" id="myform">
                            @csrf
                            
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                     <div class="mb-1 form-floating">
                                        <input class="form-control" type="text" name="causal" id="causal", placeholder='Nro de Causal' >
                                        <label for="causal" class="form-label">Habiéndose cumplido la causal :</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="mb-1 form-floating" >
                                                <input type="text" name="funcio" id="funcio", placeholder='Ingrese el Nombre del Funcionario que hace la entrega' class="form-control">
                                                <label for="funcio" class="form-label">Funcionario Saliente :</label>
                                            </div>
                                        </div>
                                        <div class= "row col-xs-3 col-sm-3 col-md-3">     {{-- C.I --}}
                                            <div class="mb-1 form-floating">
                                                <input class="form-control" type="text" name="ci" id="ci", placeholder='Ingrese Carnet  de Identidad' >
                                                <label for="ci" class="form-label">Carnet Identidad</label> 
                                            </div>
                                        </div>
                                        <div class= "row col-xs-3 col-sm-3 col-md-3">   {{-- EXT --}}
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
                                        </div>
                                    </div>
                                    <div class="mb-1 form-floating">
                                        <input class="form-control" type="text" name="cgo" id="cgo", placeholder='Ingrese el Cargo del Funcionarioa Saliente' >
                                        <label for="cgo" class="form-label">Cargo</label> 
                                    </div>       

                                    <div class="row">
                                        <div class="row col-xs-6 col-sm-6 col-md-6">
                                            <div class="mb-1 form-floating">
                                                <input class="form-control" type="text" 
                                                name="trans" id="trans", placeholder='Ingrese el Funcionario que estara a cargo' >
                                                <label for="trans" class="form-label">Funcionario a Cargo</label> 
                                            </div>
                                        </div>
                                        <div class="row col-xs-6 col-sm-6 col-md-6">
                                            <div class="mb-1 form-floating">
                                                <input class="form-control" type="text" name="cgo1" id="cgo1", placeholder='Ingrese el Cargo' >
                                                <label for="cgo1" class="form-label">Cargo</label> 
                                            </div>
                                        </div>    
                                    </div>
                                    
                                    <div class ="row">     {{-- DATOS QUE AGREGAN A LA TABLA --}}
                                        <div class="col-xs-2 col-sm-2 col-md-2">
                                            {{ Form::label('RED SOCIAL') }}
                                            <select class="form-control" name="red" id="red">
                                                <option value="WhatsApp">WhatsApp</option>
                                                <option value="Facebook">Facebook</option>
                                                <option value="Instagram">Instagram</option>
                                                <option value="Twitter">Twitter</option>
                                                <option value="TikTok">TikTok</option>
                                                <option value="YouTube">YouTube</option>
                                                <option value="LinkedIn">LinkedIn</option>
                                                <option value="Otros">Otros</option>
                                            </select> 
                                        </div>

                                        <div class="col-xs-5 col-sm-5 col-md-5 form-floating">
                                            <input type="text" name="comu" id="comu", placeholder='Ingrese la Comunidad' class="form-control">
                                            <label for="comun" class="form-label">Comunidad :</label>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-2 form-floating">
                                            <input type="text" name="usuario" id="usuario", placeholder='Ingrese el Usuario' class="form-control">
                                            <label for="usuarios" class="form-label">Usuario :</label>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 form-floating">
                                            <input type="text" name="clave" id="clave", placeholder='Ingrese la Contraseña' class="form-control">
                                            <label for="claves" class="form-label">Contraseña :</label>
                                        </div>

                                    </div>                   

                                    <div class="row">
                                        <div class="panel panel-info ">    {{-- CREA TABLA Y BOTON AGREGAR --}}
                                            <div class="panel-body">
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                    <div class="form-group">   {{-- BOTON AGREGAR --}}
                                                        <button type="button" id="bt_add" class="btn btn-primary"><i class="fa fa-fw fa-eye"></i>Agregar</button>
                                                    </div>
                                                        {{-- ELABORACION DE LA TABLA PARA EXPONER EL INGRESO DE CILINDRO --}}
                                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                        <table id="detalles" width="100%" class="table table-striped table-bordered table-condensed table-hover">
                                                            <thead style="background-color:#A92D0F5">   {{-- TITULO  --}}
                                                                <th>OPCION</th>
                                                                <th>Plataforma o red social</th>
                                                                <th>Nombre de la comunidad</th>
                                                                <th>usuario</th>
                                                                <th>Contraseña</th>
                                                            </thead>                               
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <input type="hidden" name="idci" id="idci" value="">
                                            <input type="hidden" name="empdesc" id="empdesc" value="">
                                        </div>
                                        <div class="row">
                                            <div class="mb-1 form-floating">
                                                <input class="form-control" type="text" 
                                                name="cta" id="cta", placeholder='Cuenta Comercial en Meta Business Suite' >
                                                <label for="cta" class="form-label">Nombre de la Cuenta Comercial  </label> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Páginas de Facebook que contiene el administrador comercial') }}
                                            <textarea  class="form-control" name="pagina" id="pagina" rows="4"></textarea>
                                        </div>
                                            {{-- BOTONES DE GRABAR Y CANCELAR --}}
                                        </div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
                                            <div class="form-group">
                                                <input name="_token" value="{{ csrf_token() }}" type="hidden"></input>
                                                <a href="/princ" class="btn btn-secondary" tabindex="3">Cancelar</a>

                                                <button type="button" class="btn btn-primary" id="grab">Imprimir</button>
                                            </div>
                                        </div>
                                    </div>
                                     
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

    <script>
    /* FUNCIONES PARA AÑADIR LOS REGISTROS DE CILINDRO QUE DEJAN  */

    $(document).ready(function(){
        $('#bt_add').click(function(){
            agregar();
        })
    })

    var cont=0;
    var tot=0 * 1;
    cant=[];
    $("#grabar").hide();

    function agregar(){
        texttipo= $("#red").val();   
        idensayo= $("#comu").val();
        textensayo= $("#usuario").val(); 
        pcantidad= $("#clave").val();
        //  alert(idensayo + ' - ' + texttipo+ ' - ' + textensayo + ' - ' + pcantidad);
        if (texttipo!="" && idensayo!="" && textensayo!="" && pcantidad!=""){
            var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="texttipo[]" value="'+texttipo+'">'+texttipo+'</td><td><input type="hidden" name="idensayo[]" value="'+idensayo+'">'+idensayo+'</td><td><input type="hidden" name="textensayo[]" value="'+textensayo+'">'+textensayo+'</td><td><input type="hidden" name="pcantidad[]" value="'+pcantidad+'">'+pcantidad+'</td></tr>';
            cont++;
            tot++;
            limpiar();
            evaluar();
            $('#detalles').append(fila);
        } else {
            alert("Error.... Faltan datos para ingresar el registro de RED SOCIAL");
        }
    }

    function limpiar(){
        $("#red").val("");
        $("#comu").val("");
        $("#usuario").val("");
        $("#clave").val("");
    }

    function evaluar(){
        if (tot>0){
            $("#grabar").show();
        } else {
            $("#grabar").hide();
        }
    }
    function eliminar(index){
        $("#fila" + index).remove();

        evaluar();
    }

    </script>

    <script>    /* CONSULTA SI EXISTE EL CODIGO DEL CILINDRO */
        $(document).ready(function (){
            $('#grab').on('click', function(){
                if (tot > 0) {
                    /*var nomempresa = $("#empresaid option:selected").text();
                    $('#empdesc').val(nomempresa); */
                    document.getElementById("myform").submit(); 
                } else {
                    alert('debe registrar por lo menos un Faltan datos para imprimir');
                }
            });
        })
    </script>

@stop
