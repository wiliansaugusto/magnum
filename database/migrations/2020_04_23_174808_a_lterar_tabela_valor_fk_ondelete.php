<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ALterarTabelaValorFkOndelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_valor', function (Blueprint $table) {
            $table->dropForeign(['id_palestrante'])->change();
            $table->dropForeign(['id_cidade'])->change();
        });
        Schema::table('mgm_tbl_valor', function (Blueprint $table) {
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante')->onDelete('cascade');
            $table->foreign('id_cidade')->references('id')->on('mgm_tbl_cidade')->onDelete('cascade');
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
