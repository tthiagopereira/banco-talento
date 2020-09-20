@extends('master')
@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h3><span class="audiowide"><i class="fa fa-puzzle-piece"></i>

                                                Editar empresa

                                        </span></h3>
                                </div>
                                @if(Auth::user()->tipo != 'Empresa')
                                    <div class="col text-right">
                                        <a type="button" class="btn btn-primary cinza text-white" href="{{route('empresa')}}">
                                            <i class="icon-arrow-left-circle">
                                                Voltar
                                            </i>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row ">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Formulário</strong>
                                                </div>
                                                <div class="card-body">
                                                    <form action="{{route('empresa.update',$id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        {{ csrf_field() }}
                                                        @include('sistema.empresa.form.form')
                                                        <button class="btn btn-block text-white btn-lg cinza audiowide">Salvar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

@endsection