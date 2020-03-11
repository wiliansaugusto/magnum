<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MgmTblPalestrante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_palestrante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_palestrante', 150);
            $table->integer('id_tp_nacionalidade');
            $table->string('ds_foto', 255);
            $table->integer('id_residencia');
            $table->char('ds_ativo');
            $table->string('ds_visivel_site');
            $table->string('ds_chamada', 255);
            $table->longText('ds_curriculo');
            $table->longText('ds_curriculo_tecnico');
            $table->longText('ds_observacao');
            $table->longText('ds_investimento');
            $table->longText('ds_forma_pagamento');
            $table->longText('ds_equipe_necessario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_palestrante');
    }
}
