@extends('adminlte::page')

@section('title', 'Red Social')

@section('content_header')
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('FORMULARIO DE CUMPLIMIENTO DE REQUERIMIENTOS') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('requerimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('CREAR') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="requer" class="table table-striped table-hover">
                                <thead  class="bg-primary text-while">
                                    <tr>
                                        <th>No</th>
										<th>Funcionario</th>
										<th>Fecha</th>
										<th>Hora</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requerimientos as $requerimiento)
                                        <tr>
                                            <td>{{ requerimiento->id }}</td>
                                            
											<td>{{ $requerimiento->funcionario }}</td>
											<td>{{ $requerimiento->fecha }}</td>
											<td>{{ $requerimiento->hora }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary " href="{{ route('requerimientos.show',$requerimiento->id) }}"><i class="fa fa-fw fa-eye"></i> Imprimir</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $requerimientos->links() !!}
            </div>
        </div>
    </div>
@endsection

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
        $('#requer').DataTable({"lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
        } ); 
        } );    
    </script>

@stop
