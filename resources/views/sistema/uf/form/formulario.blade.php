<div class="container">

    <div class="row">

        <div class="col-md-6">
            <div class="form-group">
                <label for="nome" class="audiowide">Cidade</label>
                <input type="text" class="form-control caixa_alta" name="nome" id="nome" aria-describedby="nameHelp"  placeholder="Entre com a cidade" required
                       value="{{isset($registro->nome) ? $registro->nome : ''}}" autofocus minlength="5" maxlength="60">
                <small id="nameHelp" class="form-text text-muted">Informe a cidade.</small>
            </div>
        </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipo" class="audiowide">Uf</label>
                    <select class="form-control" id="uf" name="uf" required>
                        <option value="">Informe o Estado</option>
                        <option value="AC" @if (isset($registro->uf)) @if ($registro->uf == "AC") selected="selected" @endif @endif > Acre </option>
                        <option value="AL" @if (isset($registro->uf)) @if ($registro->uf == "AL") selected="selected" @endif @endif > Alagoas </option>
                        <option value="AP" @if (isset($registro->uf)) @if ($registro->uf == "AP") selected="selected" @endif @endif > Amapá </option>
                        <option value="AM" @if (isset($registro->uf)) @if ($registro->uf == "AM") selected="selected" @endif @endif > Amazonas </option>
                        <option value="BA" @if (isset($registro->uf)) @if ($registro->uf == "BA") selected="selected" @endif @endif > Bahia </option>
                        <option value="CE" @if (isset($registro->uf)) @if ($registro->uf == "CE") selected="selected" @endif @endif > Ceará </option>
                        <option value="DF" @if (isset($registro->uf)) @if ($registro->uf == "DF") selected="selected" @endif @endif > Distrito Federal </option>
                        <option value="ES" @if (isset($registro->uf)) @if ($registro->uf == "ES") selected="selected" @endif @endif > Espírito Santo </option>
                        <option value="GO" @if (isset($registro->uf)) @if ($registro->uf == "GO") selected="selected" @endif @endif > Goiás </option>
                        <option value="MA" @if (isset($registro->uf)) @if ($registro->uf == "MA") selected="selected" @endif @endif > Maranhão </option>
                        <option value="MT" @if (isset($registro->uf)) @if ($registro->uf == "MT") selected="selected" @endif @endif > Mato Grosso </option>
                        <option value="MS" @if (isset($registro->uf)) @if ($registro->uf == "MS") selected="selected" @endif @endif > Mato Grosso do Sul </option>
                        <option value="MG" @if (isset($registro->uf)) @if ($registro->uf == "MG") selected="selected" @endif @endif > Minas Gerais </option>
                        <option value="PA" @if (isset($registro->uf)) @if ($registro->uf == "PA") selected="selected" @endif @endif > Pará </option>
                        <option value="PB" @if (isset($registro->uf)) @if ($registro->uf == "PB") selected="selected" @endif @endif > Paraíba </option>
                        <option value="PR" @if (isset($registro->uf)) @if ($registro->uf == "PR") selected="selected" @endif @endif > Paraná </option>
                        <option value="PE" @if (isset($registro->uf)) @if ($registro->uf == "PE") selected="selected" @endif @endif > Pernambuco </option>
                        <option value="PI" @if (isset($registro->uf)) @if ($registro->uf == "PI") selected="selected" @endif @endif > Piauí </option>
                        <option value="RJ" @if (isset($registro->uf)) @if ($registro->uf == "RJ") selected="selected" @endif @endif > Rio de Janeiro </option>
                        <option value="RN" @if (isset($registro->uf)) @if ($registro->uf == "RN") selected="selected" @endif @endif > Rio Grande do Norte </option>
                        <option value="RS" @if (isset($registro->uf)) @if ($registro->uf == "RS") selected="selected" @endif @endif > Rio Grande do Sul </option>
                        <option value="RO" @if (isset($registro->uf)) @if ($registro->uf == "RO") selected="selected" @endif @endif > Rondônia </option>
                        <option value="RR" @if (isset($registro->uf)) @if ($registro->uf == "RR") selected="selected" @endif @endif > Roraima </option>
                        <option value="SC" @if (isset($registro->uf)) @if ($registro->uf == "SC") selected="selected" @endif @endif > Santa Catarina </option>
                        <option value="SP" @if (isset($registro->uf)) @if ($registro->uf == "SP") selected="selected" @endif @endif > São Paulo </option>
                        <option value="SE" @if (isset($registro->uf)) @if ($registro->uf == "SE") selected="selected" @endif @endif > Sergipe </option>
                        <option value="TO" @if (isset($registro->uf)) @if ($registro->uf == "TO") selected="selected" @endif @endif > Tocantins </option>
                        <option value="EX" @if (isset($registro->uf)) @if ($registro->uf == "EX") selected="selected" @endif @endif > Estrangeiro </option>

                    </select>
                    <small id="guerraHelp" class="form-text text-muted">Informe o Estado.</small>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>