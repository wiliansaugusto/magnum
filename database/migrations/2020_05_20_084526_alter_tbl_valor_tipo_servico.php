<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTblValorTipoServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_valor', function (Blueprint $table) {
            $table->unsignedBigInteger('id_tp_servico')->nullable();
            $table->foreign('id_tp_servico')->references('id')
            ->on('mgm_tbl_tipo_servico')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('=mgm_tbl_valor', function (Blueprint $table) {
            //
        });
    }
}
