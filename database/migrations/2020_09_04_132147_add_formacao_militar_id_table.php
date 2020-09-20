<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFormacaoMilitarIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('talentos', function (Blueprint $table) {
            $table->integer('formacao_militar_id')->unsigned();
            $table->foreign('formacao_militar_id')->references('id')->on('formacao_militars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('talentos', function (Blueprint $table) {
            $table->dropColumn('formacao_militar_id');
        });
    }
}