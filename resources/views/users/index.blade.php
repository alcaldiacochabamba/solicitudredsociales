@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1> USUARIOS </h1>
@stop

@section('content')
@can('users.index')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <a href="users/create" class="btn btn-primary">CREA USUARIO</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive p-0">
                <TABLe id="users" class = "table table-striped table-bordered shadow-lg mt-4"   style="with:100%">
                    <thead class="bg-primary text-while" style="background-color: #6777ef"> 
                        <tr>
                            <th style="color:#fff;">ID</th>
                            <th style="color:#fff;">NOMBRE</th>
                            <th style="color:#fff;">E-MAIL</th>
                            <th style="color:#fff;">ROL</th>
                            <th style="color:#fff;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $usr)
                        <tr>
                            <td>{{$usr->id}}</td>
                            <td>{{$usr->name}}</td>
                            <td>{{$usr->email}}</td>
                            <td>
                                @if(!empty($usr->getRoleNames()))
                                    @foreach($usr->getRoleNames() as $rolName)
                                        <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                                    @endforeach
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('users.edit', $usr->id) }}   "><i class="fa fa-magic"></i></a>

                                {{--
                                <a href="" data-target="#md-del-{{$usuario->id}}"   data-toggle="modal"><button class="btn btn-danger"><i class="fa   fa-eraser"></i></button></a> 

                                {!! Form::open(['method'=> 'DELETE', 'route'=> ['usuarios.destroy',     $usuario->id], 'style'=>'display:inline']) !!}
                                    {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                --}}
                            </td>
                        </tr>
                        @include('users.modal')  
                        @endforeach
                    </tbody>
                </TABLe>
            </div>
        </div>
    </div>
@endcan    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">    
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
    $('#users').DataTable({"lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
    } ); 
    } );    
</script>



@stop









