<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeigOmIdUserTable extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('om_id')->unsigned()->nullable();
            $table->foreign('om_id')->references('id')->on('oms');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('om_id');
        });
    }
}
