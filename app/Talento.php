<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talento extends Model
{
    protected $fillable = [
        'nome','sexo','data_nascimento','cpf','identidade','estado_civil','nome_pai','nome_mae','portador_deficiencia',
        'email','celular','om_id','uf_id','endereco','linkedin','facebook','instagram','cargos_pre_eb','hierarquia','ndg',
        'data_praca','data_desligamento','disponibilidade','viajar','mudar','image_arquivo_politica_privacidade','image_militar'
    ];
}
