@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header',['pageSlug' => 'charts'])
<h1> DATOS DE SERVICIOS </h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header">
                <div class="row">               
                    <div class="col-sm-6 text-left">
                        <h5 class="card-category">Total Servicios</h5>
                        <h2 class="card-title">Logistica Reporte</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                <input type="radio" name="options" checked>
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Account</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-single-02"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple active" id="1">
                                <input type="radio" class="d-none d*sm-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchase</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-gift-2"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple active" id="2">
                                <input type="radio" class="d-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Session</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-tap-02"></i>
                                </span>
                            </label>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <canvas id="chart-servicios" stylr="display: block; width: 100%; heigh: 600px"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
            var cData = JSON.parse(`<?php echo $data;`)
            //console.log(cData)
            const ctx = document.getElementById('chart-servicios').getContext('2d');
            const myChart = new Chart(ctx, {
                type:'bar',
                data: {
                    labels:cData.label,
                    datasets:[{
                        label:'Cant. de servicios',
                        data:cData.data,
                        backgroundColor:[
                            '#e1bee7',
                            '#ce93d8',
                            '#ba68c8',
                            '#ab47bc',
                            '#9c27b0',
                            '#8e24aa',
                            '#c5cae9',
                            '#9fa8da',
                            '#7986cb',
                        ],
                        borderWidth:1
                    }]
                },
                options:{
                    scales:{
                        yAxes: [{
                            ticks:{
                                beginAtZero:true
                            }
                        }]
                    }
                }
            })
        }); 
           
    </script>


@endsection
