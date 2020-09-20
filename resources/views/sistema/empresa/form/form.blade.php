<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-puzzle-piece"></i> Informações da empresa</strong>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image_logo" class="audiowide"><i class="fa fa-camera"></i> Selecione a logo</label>
                            <input type="file" name="image_logo" id="image_logo"
                                   value="{{isset($empresa->image_logo) ? $empresa->image_logo : ''}}" >
                            <small class="form-text text-muted">Informe uma imagem logo da empresa</small>
                        </div>
                    </div>
                    @if(isset($empresa->image_logo))
                        <input type="text" class="esconder" name="image_logo2" id="image_logo2" value="{{isset($empresa->image_logo) ? $empresa->image_logo : $empresa->image_logo}}">
                    @endif
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome_empresa" class="audiowide"><i class="fa fa-user"></i> Nome da empresa</label>
                            <input type="text" class="form-control caixa_alta" name="nome_empresa" id="nome_empresa" aria-describedby="nameHelp"
                                   placeholder="Entre com o nome" required
                                   value="{{isset($empresa->nome_empresa) ? $empresa->nome_empresa : ''}}">
                            <div class="invalid-feedback">
                                Informe seu <strong>nome da empresa</strong>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row ">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-user-secret"></i> Informações pessoais</strong>
            </div>
            <div class="container-fluid">

                <script>
                    jQuery(function ($) {
                        $("#telefone").mask("(99) 99999-9999");
                        $("#cpf").mask("999.999.999-99");
                    });
                </script>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="audiowide"><i class="fa fa-user"></i> Nome Completo</label>
                            <input type="text" class="form-control caixa_alta" name="name" id="name" aria-describedby="nameHelp"  placeholder="Entre com o nome" required
                                   value="{{isset($user->name) ? $user->name : ''}}" autofocus minlength="5" maxlength="60">
                            <div class="invalid-feedback">
                                Informe seu <strong>nome completo</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="audiowide"><i class="fa fa-envelope"></i> E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="guerraHelp" placeholder="Entre com o email" required
                                   value="{{isset($user->email) ? $user->email : ''}}" >
                            <div class="invalid-feedback">
                                Informe um <strong>Email</strong> valido
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cpf" class="audiowide"><i class="fa fa-user"></i> CPF</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" aria-describedby="nameHelp"  placeholder="Entre com o nome"
                                   value="{{isset($user->cpf) ? $user->cpf : ''}}">
                            <div class="invalid-feedback">
                                Informe seu <strong>cpf</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telefone" class="audiowide"><i class="fa fa-whatsapp"></i> Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" aria-describedby="guerraHelp" placeholder="Telefone" required
                                   value="{{isset($user->telefone) ? $user->telefone : ''}}" >
                            <div class="invalid-feedback">
                                Informe um <strong>Email</strong> valido
                            </div>
                        </div>
                    </div>
                    @if(Auth::user()->tipo != 'Empresa')
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status" class="audiowide"><i class="fa fa-inbox"></i> Status</label>
                                <select name="status" id="status" class="form-control custom-select" required>
                                    <option value="">Informe o status do Usuário</option>
                                    <option value="Ativo" @if(isset($user->status)) @if($user->status == "Ativo") selected @endif @endif>Ativo</option>
                                    <option value="Inativo" @if(isset($user->status)) @if($user->status == "Inativo") selected @endif @endif>Inativo</option>
                                </select>
                                <div class="invalid-feedback">Informe o <strong>STATUS</strong> do usuário</div>
                            </div>
                        </div>
                    @endif
                    @if(Auth::user()->tipo === 'Empresa')
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password" class="audiowide"><i class="fa fa-user-secret"></i> Informe sua senha</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       aria-describedby="guerraHelp" placeholder="Informe sua senha" required
                                       value="{{isset($user->password) ? $user->password : ''}}" >
                                <div class="invalid-feedback">
                                    Informe sua <strong>Senha</strong>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
'