@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR - NUEVO USUARIO</h1>
@stop

@section('content')

@can('users.create')
    <Form action="/users" method="POST" id="myform" >
        @csrf
        <input type="hidden" name="vari" value="7">
        <div class="box box-info padding-1">
            <div class="box-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <div class ="row">
                        <div class="col-xs-36 col-sm-6 col-md-6"> 
                            {{ Form::label('NOMBRE DEL USUARIO') }}
                            {{ Form::text('name', $users->name, ['id' => 'name', 'class' =>     'form-control' . ($errors->has('name') ? ' is-invalid' : ''),   'placeholder' => 'Ingrese Nombre Usuario']) }}
                        </div>
                    </div>
                    <div class ="row">
                        <div class="col-xs-6 col-sm-6 col-md-6"> 
                            {{ Form::label('CORREO ELECTRONICO') }}
                            {{ Form::text('email', $users->email, ['id' => 'email', 'class' =>  'form-control' . ($errors->has('email') ? ' is-invalid' : ''),   'placeholder' => 'Ingrese el Email']) }}
                        </div>
                    </div>
                    <div class ="row">
                        <div class="col-xs-3 col-sm-3 col-md-3"> 
                            {{ Form::label('PASSWORD') }}
                            {{ Form::password('password', $users->password, ['id' => 'password',    'class' => 'form-control' . ($errors->has('password') ? ' is-invalid' :    ''), 'placeholder' => 'Min 8 Caract Password']) }}
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3"> 
                            {{ Form::label('CONFIRMAR PASSWORD') }}
                            {{ Form::password('confirm-password', $users->password, ['id' =>    'confirm-password', 'class' => 'form-control' . ($errors->has  ('confirm-password') ? ' is-invalid' : ''), 'placeholder' => 'Confirmar   el Password']) }}
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="box-footer mt20">
                <a href="/users" class="btn btn-secondary" tabindex="4">Cancelar</a>

                <button type="button" class="btn btn-primary" tabindex="3" id="grab">Guardar</  button>
            </div>
        </div>

    </Form>
@endcan

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

    <script>    /* CONSULTA SI EXISTE LA DESCRIPCION  */
        $(document).ready(function (){
            $('#grab').on('click', function(){
                var cod_id = $(email).val();
                var desc = 0;
                if ($.trim(cod_id) != '') { 
                    $.get('/ubiusu',{causadescripcion: cod_id}, function(bloarray) {
                    $.each(bloarray, function(index, value){
                    desc = index;
                    });
                    if (desc > 0) {
                        alert('YA EXISTE EL CORREO ELECTRONICO QUE DESEA CREAR')
                    } else {
                        document.getElementById("myform").submit(); 
                    }
                    })   
                } else {
                    alert('Debe ingresar su correo electronico');
                }
            });
        })
    </script>

@stop
    
