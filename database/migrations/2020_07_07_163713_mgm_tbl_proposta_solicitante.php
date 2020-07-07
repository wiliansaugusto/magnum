<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblPropostaSolicitante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_proposta_solicitante', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedbigInteger('id_proposta')->nullable($value = true);
            $table->unsignedbigInteger('id_solicitante')->nullable($value = true);
            $table->foreign('id_proposta')->references('id')->on('mgm_tbl_proposta');
            $table->foreign('id_solicitante')->references('id')->on('mgm_tbl_solicitante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mgm_tbl_proposta_solicitante', function (Blueprint $table) {
            //
        });
    }
}
