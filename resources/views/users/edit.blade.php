@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ASIGNAR UN ROL</h1>
@stop

@section('content')
    @can('users.edit')
        <div class="card">
            <div class="card-body">
                <p class="h5">Nombre:</p>
                <p class="form-control">{{$user->name}}</p>

                <h2 class="h5">Listado de Roles</h2>
                {!! Form::model($user,['route' => ['users.update', $user], 'method' => 'put'])!!}
                    @foreach ($roles as $role)
                        <div>
                            <label>
                                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                {{$role->name}}
                            </label>
                        </div>
                    @endforeach
                    
                    {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary mt-2'])!!}
                {!! Form::close() !!}
            </div>
        </div>
    @endcan
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>


@stop
    
