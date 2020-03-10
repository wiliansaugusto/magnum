<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MgmTblPalestranteContrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_palestrante_contrato', function (Blueprint $table) {
            $table->bigIncrements('id_palestrante_contrato');
            $table->timestamps();
            $table->unsignedBigInteger('id_palestrante');
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante');
            $table->unsignedBigInteger('id_contato');
            $table->foreign('id_contato')->references('id')->on('mgm_tbl_contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_palestrante_contrato');
    }
}
