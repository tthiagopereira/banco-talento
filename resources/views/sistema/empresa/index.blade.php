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
                                    <h3><span class="audiowide"><i class="fa fa-puzzle-piece"></i> Empresa  </span></h3>
                                </div>
                                <div class="col text-right">
                                    @can('view',\App\User::class)
                                        <a type="button" class="btn btn-primary cinza text-white"
                                           href="{{route('empresa.create')}}">
                                            <i class="fa fa-puzzle-piece">
                                                Cadastrar Empresa
                                            </i>
                                        </a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row ">
                                <div class="container-fluid">
                                    <table id="example" class="display  "style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th class="">Logo</th>
                                            <th class="">Empresa</th>
                                            <th class="">Nome</th>
                                            <th class="">E-mail</th>
                                            <th class="">Status</th>
                                            <th class="">Contato</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($register as $registro)
                                            <tr>
                                                <td>{{$registro->id}}</td>
                                                <td><img src="{{asset($registro->image_logo)}}" alt="" width="100px" height="60px"></td>
                                                <td>{{$registro->nome_empresa}}</td>
                                                <td>{{$registro->user->name}}</td>
                                                <td>{{$registro->user->email}}</td>
                                                <td>{{$registro->user->status}}</td>
                                                <td>{{$registro->user->telefone}}</td>

                                                <td class="text-center">
                                                    @can('view',\App\User::class)
                                                        <a href="{{route('empresa.edit',$registro->id)}}" data-toggle="tooltip" data-placement="top" title="Editar" class="link"><i class="icon-pencil"></i></a>
                                                        @can('delete',\App\User::class)
                                                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter{{ $registro->id }}" data-toggle="tooltip" data-placement="top" title="Excluir" class="link"><i class="icon-trash"></i></a>
                                                        @endcan
                                                    @endcan
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="exampleModalCenter{{ $registro->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title audiowide text-danger" id="exampleModalLongTitle">Atenção!</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="container">
                                                                    <h4 class="audiowide">Tem certeza que deseja excluir esse registro: <span class="text-danger">{{$registro->nome_empresa}}</span></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                                                            <a href="{{route('empresa.destroy',$registro->id)}}" type="button" class="btn btn-danger">Excluir</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th class="">Logo</th>
                                            <th class="">Empresa</th>
                                            <th class="">Nome</th>
                                            <th class="">E-mail</th>
                                            <th class="">Status</th>
                                            <th class="">Contato</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                        </tfoot>

                                    </table>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('myscript')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                duf: 'Bfrtip',
                "oLanguage": {
                    "sLengthMenu": "Mostrar _MENU_ registros por página",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
                    "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
                    "sInfoFiltered": "(filtrado de _MAX_ registros)",
                    "sSearch": "Pesquisar: ",
                    "oPaginate": {
                        "sFirst": "Início",
                        "sPrevious": "Anterior",
                        "sNext": "Próximo",
                        "sLast": "Último"
                    }
                },
                "order": [[0,"desc"]],

                "columnDefs": [
                    {
                        "targets": [ 0 ],
                        "visible": false,
                        "searchable": false
                    },
                    {
                        "targets": [ 0 ],
                        "visible": false
                    }
                ],

                buttons: [
                    'excel'
                ],
                responsive: true,
            });

        } );
    </script>
@endsection