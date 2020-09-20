@extends('master')

@section('content')

    @can('viewBasico', \App\User::class)
        <script>
            jQuery(function ($) {
                $("#cpf").mask("999.999.999-99");
                $("#numero").mask("(99) 99999-9999");
            });
        </script>
        <div class="container-fluid mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="audiowide">Aviso <i class="icon-speech"></i></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12">
                                        <div class="alert alert-primary" align="center" role="alert">
                                            <h2>Bem vindo(a) <strong>{{$user->name}}</strong> ao sistema de banco de talentos do exercito!</h2>
                                            <h3 class="alert alert-warning">Entre em contato conosco para ser liberado no sistema</h3>
                                            <h4 class="alert alert-danger"><i class="fa fa-whatsapp"></i> (92) 98481-9707 <br>
                                                <i class="icon-envelope-letter"></i> tthiagopereira7@gmail.com</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
                </div>
            </div>
        </div>
    @endcan
    @can('viewPermissao', \App\User::class)
        <div class="container-fluid mt-2">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="audiowide">Dados Basicos</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-sm-12 col-lg-4">

                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="callout callout-danger">
                                                    <small class="text-muted">Militares</small>
                                                    <br>
                                                    <h4 class="audiowide"><strong><span class="oms" id="oms"></span></strong></h4>
                                                    <div class="chart-wrapper">
                                                        <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="callout callout-info">
                                                    <small class="text-muted">Empresas</small>
                                                    <br>
                                                    <h4 class="audiowide"><strong><span>{{$empresas}}</span></strong></h4>
                                                    <div class="chart-wrapper">
                                                        <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="mt-0">

                                    </div>

                                    <div class="col-sm-6 col-lg-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="callout callout-success">
                                                    <small class="text-muted">Contratados</small>
                                                    <br>
                                                    <h4 class="audiowide"><strong><span class="aprovado"></span></strong></h4>
                                                    <div class="chart-wrapper">
                                                        <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="callout callout-warning">
                                                    <small class="text-muted">Militares Masculinos</small>
                                                    <br>
                                                    <h4 class="audiowide"><strong><span class="qtd_pedidos"></span></strong></h4>
                                                    <div class="chart-wrapper">
                                                        <canvas id="sparkline-chart-4" width="100" height="30"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="mt-0">
                                    </div>

                                    <div class="col-sm-6 col-lg-4">
                                        @can('view',\App\User::class)
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout">
                                                        <small class="text-muted">Militares femeninos</small>
                                                        <br>
                                                        <h4 class="audiowide"><strong><span class="viatura-ativa"></span></strong></h4>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        <small class="text-muted">OMS</small>
                                                        <br>
                                                        <h4 class="audiowide"><strong><span>{{ $oms }}</span></strong></h4>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-6" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>

                                            <!--/.row-->
                                            <hr class="mt-0">
                                        @endcan
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>

        </div>
        <div class="container-fluid">

            <div class="animated fadeIn">

                <div class="card-columns cols-2">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="audiowide">Contratados por SEXO em %</h4>
                        </div>

                        <div class="card-body">
                            <div class="chart-wrapper">
                                <canvas id="pedido_viatura"></canvas>
                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="audiowide">Quantidade de contratados</h4>
                        </div>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <canvas id="canvas-2"></canvas>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h4 class="audiowide">Militares em %</h4>
                        </div>

                        <div class="card-body">
                            <div class="chart-wrapper">
                                <canvas id="canvas-5"></canvas>
                            </div>
                        </div>

                    </div>
                    {{--<div class="card">--}}
                    {{--<div class="card-header">--}}
                    {{--Doughnut Chart--}}
                    {{--<div class="card-actions">--}}
                    {{--<a href="http://www.chartjs.org">--}}
                    {{--<small class="text-muted">docs</small>--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card-body">--}}
                    {{--<div class="chart-wrapper">--}}
                    {{--<canvas id="canvas-3"></canvas>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="card" hidden>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <canvas id="canvas-1"></canvas>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    @endcan


@endsection

@section('myscript')
    <script src="{{ asset('js/views/charts.js') }}"></script>
@endsection