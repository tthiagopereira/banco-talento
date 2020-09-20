<script>
    jQuery(function ($) {
        $("#celular").mask("(99) 99999-9999");
        $("#cpf").mask("999.999.999-99");
    });
</script>

'om_id','cargos_pre_eb','hierarquia','ndg',
'data_praca','data_desligamento','disponibilidade','viajar','mudar'
{{--Dados Pessoais--}}
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-user-secret"></i> Informações Pessoais</strong>
            </div>
            <div class="container-fluid mt-3">

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image_arquivo_privacidade" class="audiowide"><i class="fa fa-align-justify"></i> Arquivo Contendo Política de Privacidade assinado pelo Militar</label>
                            <input type="file" name="image_arquivo_privacidade" id="image_arquivo_privacidade"
                                   value="{{isset($register->image_arquivo_privacidade) ? $register->image_arquivo_privacidade : ''}}" >
                            <small class="form-text text-muted">Selecione o Arquivo Contendo Política de Privacidade assinado pelo Militar</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image_militar" class="audiowide"><i class="fa fa-camera"></i> Informe a foto ou a logo</label>
                            <input type="file" name="image_militar" id="image_militar"
                                   value="{{isset($register->image_militar) ? $register->image_militar : ''}}" >
                            <small class="form-text text-muted">Informe uma imagem logo da empresa ou foto do talento</small>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name" class="audiowide"><i class="fa fa-user"></i> Nome Completo</label>
                            <input type="text" class="form-control caixa_alta" name="name" id="name" aria-describedby="nameHelp"  placeholder="Entre com o nome" required
                                   value="{{isset($registro->name) ? $registro->name : ''}}">
                            <div class="invalid-feedback">
                                Informe seu <strong>nome completo</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sexo" class="audiowide"><i class="icon-people"></i> Sexo</label>
                            <select name="sexo" id="sexo" class="form-control" required>
                                <option value="">Informe seu sexo</option>
                                <option value="Masculino" @if(isset($register)) @if($register->sexo == 'Masculino') selected @endif @endif>Masculino</option>
                                <option value="Femenino" @if(isset($register)) @if($register->sexo == 'Femenino') selected @endif @endif>Femenino</option>
                            </select>
                            <div class="invalid-feedback">Selecione o <strong>SEXO</strong></div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="data_nascimento" class="audiowide"><i class="fa fa-calendar"></i> Nascimento</label>
                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" aria-describedby="guerraHelp"
                                   value="{{isset($registro->data_nascimento) ? $registro->data_nascimento : ''}}" >
                            <small id="guerraHelp" class="form-text text-muted">Informe a data de nacimento</small>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cpf" class="audiowide"><i class="fa fa-calendar"></i> Informe o C.P.F</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" aria-describedby="guerraHelp"
                                   value="{{isset($registro->cpf) ? $registro->cpf : ''}}" >
                            <small id="guerraHelp" class="form-text text-muted">Informe C.P.F</small>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="identidade" class="audiowide"><i class="fa fa-address-card"></i> Identidade</label>
                            <input type="text" class="form-control" name="identidade" id="identidade" aria-describedby="nameHelp"  placeholder="Entre com o nome" required
                                   value="{{isset($registro->identidade) ? $registro->identidade : ''}}">
                            <div class="invalid-feedback">
                                Informe a <strong>identidade</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="estado_civil" class="audiowide"><i class="fa fa-street-view"></i> Estado Civil</label>
                            <select name="estado_civil" id="estado_civil" class="form-control" required>
                                <option value="">Informe seu estado civil</option>
                                <option value="Solteiro" @if(isset($register)) @if($register->estado_civil == 'Solteiro') selected @endif @endif>Solteiro</option>
                                <option value="Casado" @if(isset($register)) @if($register->estado_civil == 'Casado') selected @endif @endif>Casado</option>
                                <option value="Seperado" @if(isset($register)) @if($register->estado_civil == 'Seperado') selected @endif @endif>Seperado</option>
                                <option value="Divorciado" @if(isset($register)) @if($register->estado_civil == 'Divorciado') selected @endif @endif>Divorciado</option>
                                <option value="Viuvo" @if(isset($register)) @if($register->estado_civil == 'Viuvo') selected @endif @endif>Viúvo</option>
                                <option value="Nao informado" @if(isset($register)) @if($register->estado_civil == 'Nao informado') selected @endif @endif>Não informado</option>
                            </select>
                            <div class="invalid-feedback">Selecione o se <strong>ESTADO CIVIL</strong></div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nome_mae" class="audiowide"><i class="icon-user-female"></i> Nome da Mãe</label>
                            <input type="text" class="form-control caixa_alta" name="nome_mae" id="nome_mae" aria-describedby="nameHelp"
                                   placeholder="Entre com o nome"
                                   value="{{isset($registro->nome_mae) ? $registro->nome_mae : ''}}">
                            <div class="invalid-feedback">
                                Informe o <strong>Nome da mãe</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nome_pai" class="audiowide"><i class="icon-user-following"></i> Nome do pai</label>
                            <input type="text" class="form-control caixa_alta" name="nome_pai" id="nome_pai" aria-describedby="nameHelp"  placeholder="Entre com o nome" required
                                   value="{{isset($registro->identidade) ? $registro->identidade : ''}}">
                            <div class="invalid-feedback">
                                Informe  <strong>Nome do pai</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="portador_deficiente" class="audiowide"><i class="fa fa-creative-commons"></i> Portador Deficiente</label>
                            <select name="portador_deficiente" id="portador_deficiente" class="form-control" required>
                                <option value="">Informe se portador de deficiencia fisica</option>
                                <option value="Sim" @if(isset($register)) @if($register->portador_deficiente == 'Sim') selected @endif @endif>Sim</option>
                                <option value="Nao" @if(isset($register)) @if($register->portador_deficiente == 'Nao') selected @endif @endif>Nao</option>
                            </select>
                            <div class="invalid-feedback">Selecione o se <strong>Portador deficiente</strong></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

{{--Informaçõs de contatos--}}
<div class="row ">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-warning"></i> Informações de contato</strong>
            </div>
            <div class="container-fluid">

                <div class="row mt-3">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email" class="audiowide"><i class="fa fa-envelope"></i> E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="guerraHelp" placeholder="Entre com o email" required
                                   value="{{isset($registro->email) ? $registro->email : ''}}" autofocus>
                            <div class="invalid-feedback">
                                Informe um <strong>número</strong> valido
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="celular" class="audiowide"><i class="fa fa-whatsapp"></i> Celular</label>
                            <input type="text" class="form-control caixa_alta" name="celular" id="celular" aria-describedby="nameHelp"
                                   placeholder="Entre com o nome" required
                                   value="{{isset($registro->celular) ? $registro->celular : ''}}">
                            <div class="invalid-feedback">
                                Informe seu <strong>nome completo</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="uf_id" class="audiowide"><i class="fa fa-podcast"></i> Cidade onde reside</label>
                            <select name="uf_id" id="uf_id" class="form-control" required>
                                <option value="">Informe a cidade </option>
                                @foreach($ufs as $uf)
                                    <option value="{{$uf->id}}" @if(isset($uf)) @if(isset($register)) @if($register->uf_id == $uf_id) selected @endif  @endif @endif>
                                        {{$uf->nome}} - {{$uf->uf}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Selecione a <strong>cidade</strong></div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="endereco" class="audiowide"><i class="fa fa-map-marker"></i> Endereço completo</label>
                            <input type="text" class="form-control caixa_alta" name="endereco" id="endereco" aria-describedby="nameHelp"
                                   placeholder="Entre com o nome" required
                                   value="{{isset($registro->endereco) ? $registro->endereco : ''}}">
                            <div class="invalid-feedback">
                                Informe seu <strong>Bairro</strong>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="linkedin" class="audiowide"><i class="icon-social-linkedin"></i> Linkedin</label>
                            <input type="text" class="form-control" name="linkedin" id="linkedin"
                                   aria-describedby="nameHelp"  placeholder="Informe seu linkedin"
                                   value="{{isset($registro->linkedin) ? $registro->linkedin : ''}}">
                            <div class="invalid-feedback">
                                Informe o <strong>linkedin</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="facebook" class="audiowide"><i class="icon-social-facebook"></i> Facebook</label>
                            <input type="text" class="form-control" name="facebook" id="facebook"
                                   aria-describedby="nameHelp"  placeholder="Informe seu linkedin"
                                   value="{{isset($registro->facebook) ? $registro->facebook : ''}}">
                            <div class="invalid-feedback">
                                Informe o <strong>facebook</strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="instagram" class="audiowide"><i class="icon-social-instagram"></i> Instagram</label>
                            <input type="text" class="form-control " name="instagram" id="instagram"
                                   aria-describedby="nameHelp"  placeholder="Informe seu instagram"
                                   value="{{isset($registro->instagram) ? $registro->instagram : ''}}">
                            <div class="invalid-feedback">
                                Informe o <strong>instagram</strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-building"></i> Treinamento formal</strong>
            </div>
            <div class="container-fluid">

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-building"></i> Experiência profissional prática</strong>
            </div>
            <div class="container-fluid">

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-building"></i> Carreira militar</strong>
            </div>
            <div class="container-fluid">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="formacao_militar_id" class="audiowide"><i class="fa fa-creative-commons"></i> Formação Militar</label>
                        <select name="formacao_militar_id" id="formacao_militar_id" class="form-control" required>
                            <option value="">Informe a formação militar </option>
                            @foreach($formacaoMilidar as $formacao)
                                <option value="{{$formacao->id}}" @if(isset($formacao)) @if(isset($register)) @if($register->nome == 'Sim') selected @endif  @endif @endif>
                                    {{$formacao->nome}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Selecione a <strong>formação militar</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-building"></i> Opinião do chefe direto</strong>
            </div>
            <div class="container-fluid">

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-building"></i> Expectativas profissionais</strong>
            </div>
            <div class="container-fluid">

            </div>
        </div>
    </div>
</div>