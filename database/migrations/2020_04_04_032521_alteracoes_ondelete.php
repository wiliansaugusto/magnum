<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlteracoesOndelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('mgm_tbl_palestrante_categoria', function (Blueprint $table) {
            $table->dropForeign(['id_palestrante']);
            $table->dropForeign(['id_categoria']);
        });
        Schema::table('mgm_tbl_palestrante_categoria', function (Blueprint $table) {
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('mgm_tbl_categoria')->onDelete('cascade');
        });
        Schema::table('mgm_tbl_palestrante_valor', function (Blueprint $table) {
            $table->dropForeign(['id_palestrante']);
            $table->dropForeign(['id_valor']);
        });
        Schema::table('mgm_tbl_palestrante_valor', function (Blueprint $table) {

            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante')->onDelete('cascade');
            $table->foreign('id_valor')->references('id')->on('mgm_tbl_valor')->onDelete('cascade');

        });
        Schema::table('mgm_tbl_dados_contratuais', function (Blueprint $table) {
            $table->dropForeign(['id_palestrante']);
        });
        Schema::table('mgm_tbl_dados_contratuais', function (Blueprint $table) {
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante')->onDelete('cascade');

        });
        Schema::table('mgm_tbl_palestrante_acessor', function (Blueprint $table) {
            $table->dropForeign(['id_palestrante']);
            $table->dropForeign(['id_acessor']);

            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante')->onDelete('cascade');
            $table->foreign('id_acessor')->references('id')->on('mgm_tbl_acessor')->onDelete('cascade');

        });
        Schema::table('mgm_tbl_contato', function (Blueprint $table) {
            $table->dropForeign(['id_tp_contato']);
            $table->foreign('id_tp_contato')->references('id')->on('mgm_tbl_tipo_contato')->onDelete('cascade');

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
