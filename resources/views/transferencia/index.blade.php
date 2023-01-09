@extends('layouts.app')

@section('template_title')
    Transferencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Transferencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('transferencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Empleado Ega</th>
										<th>Empleado Ing</th>
										<th>Fecha</th>
										<th>Hora</th>
										<th>Userid</th>
										<th>Estadoid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transferencias as $transferencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $transferencia->empleado_ega }}</td>
											<td>{{ $transferencia->empleado_ing }}</td>
											<td>{{ $transferencia->fecha }}</td>
											<td>{{ $transferencia->hora }}</td>
											<td>{{ $transferencia->userid }}</td>
											<td>{{ $transferencia->estadoid }}</td>

                                            <td>
                                                <form action="{{ route('transferencias.destroy',$transferencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('transferencias.show',$transferencia->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('transferencias.edit',$transferencia->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $transferencias->links() !!}
            </div>
        </div>
    </div>
@endsection
