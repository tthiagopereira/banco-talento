<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talentos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome')->nullable();
            $table->string('sexo')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('cpf')->nullable();
            $table->string('identidade')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('portador_deficiencia')->nullable();
            $table->string('email')->nullable();
            $table->string('celular')->nullable();
            $table->string('endereco')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('cargos_pre_eb')->nullable();
            $table->string('hierarquia')->nullable();
            $table->string('ndg')->nullable();
            $table->string('data_praca')->nullable();
            $table->string('data_desligamento')->nullable();
            $table->string('disponibilidade')->nullable();
            $table->string('viajar')->nullable();
            $table->string('mudar')->nullable();

            $table->string('image_arquivo_politica_privacidade')->nullable();
            $table->string('image_militar')->nullable();


            $table->integer('om_id')->unsigned();
            $table->foreign('om_id')->references('id')->on('oms');

            $table->integer('uf_id')->unsigned();
            $table->foreign('uf_id')->references('id')->on('ufs');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('talentos');
    }
}
