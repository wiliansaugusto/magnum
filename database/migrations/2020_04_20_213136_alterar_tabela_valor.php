<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarTabelaValor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_valor', function (Blueprint $table) {
            $table->unsignedBigInteger('id_palestrante');
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante');
            $table->unsignedBigInteger('id_cidade')->change();
            $table->foreign('id_cidade')->references('id')->on('mgm_tbl_cidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
