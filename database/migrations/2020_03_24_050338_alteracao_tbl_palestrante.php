<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

<<<<<<< HEAD:database/migrations/2020_03_24_050338_alterar_tbl_palestrante_null.php
class AlterarTblPalestranteNull extends Migration
=======
class AlteracaoTblPalestrante extends Migration
>>>>>>> 9ac69976d21448123c995119d962d1c3e8a1ddff:database/migrations/2020_03_24_050338_alteracao_tbl_palestrante.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_palestrante', function (Blueprint $table) {
            $table->integer('id_tp_nacionalidade')->nullable()->change();
            $table->string('ds_foto')->nullable()->change();
            $table->integer('id_residencia')->nullable()->change();
            $table->string('ds_visivel_site')->nullable()->change();
            $table->string('ds_chamada')->nullable()->change();
            $table->longText('ds_curriculo')->nullable()->change();
            $table->longText('ds_curriculo_tecnico')->nullable()->change();
            $table->longText('ds_observacao')->nullable()->change();
            $table->longText('ds_investimento')->nullable()->change();
            $table->longText('ds_forma_pagamento')->nullable()->change();
            $table->longText('ds_equipe_necessario')->nullable()->change();
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
