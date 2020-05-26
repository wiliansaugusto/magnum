<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarTabelaForeignkeyEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_endereco', function (Blueprint $table) {
            $table->dropForeign(['id_palestrante']);
        });
        Schema::table('mgm_tbl_endereco', function (Blueprint $table) {
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante')->onDelete('cascade');
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
