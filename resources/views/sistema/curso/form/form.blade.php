
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nome" class="audiowide">Curso</label>
            <input type="text" class="form-control caixa_alta" name="nome" id="nome" aria-describedby="nameHelp"  placeholder="Entre com o nome do curso" required
                   value="{{isset($registro->nome) ? $registro->nome : ''}}" autofocus minlength="5" maxlength="60">
            <small id="nameHelp" class="form-text text-muted">Informe o curso.</small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="tipo" class="audiowide">TIPO</label>
            <select class="form-control" id="tipo" name="tipo" required>
                <option value="">Informe o tipo de ensino</option>
                <option value="ensino fundamental" @if (isset($registro->tipo)) @if ($registro->tipo == "ensino fundamental") selected="selected" @endif @endif > Ensino Fundamental </option>
                <option value="ensino medio" @if (isset($registro->tipo)) @if ($registro->tipo == "ensino medio") selected="selected" @endif @endif > Ensino Médio </option>
                <option value="curso livres" @if (isset($registro->tipo)) @if ($registro->curso == "curso livres") selected="selected" @endif @endif > Cursos Livres </option>
                <option value="tecnico" @if (isset($registro->tipo)) @if ($registro->curso == "tecnico") selected="selected" @endif @endif > Técnico </option>
                <option value="certificacao" @if (isset($registro->tipo)) @if ($registro->curso == "certificacao") selected="selected" @endif @endif > Certificação </option>
                <option value="tecnologo" @if (isset($registro->tipo)) @if ($registro->tipo == "tecnologo") selected="selected" @endif @endif > Técnologo </option>
                <option value="graduacao" @if (isset($registro->tipo)) @if ($registro->tipo == "graduacao") selected="selected" @endif @endif > Graduação </option>
                <option value="pos-graduacao" @if (isset($registro->tipo)) @if ($registro->tipo == "pos-graduacao") selected="selected" @endif @endif > Pós-Graduação </option>
                <option value="mestrado" @if (isset($registro->tipo)) @if ($registro->tipo == "mestrado") selected="selected" @endif @endif > Mestrado </option>
                <option value="doutorado" @if (isset($registro->tipo)) @if ($registro->tipo == "doutorado") selected="selected" @endif @endif > Doutorado </option>
            </select>
            <small id="guerraHelp" class="form-text text-muted">Informe o tipo de ensino.</small>
        </div>
    </div>
</div>
