<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblPrefilPublicoEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_perfil_publico_evevnto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedbigInteger('id_evento');
            $table->unsignedbigInteger('id_perfil_publico');
            $table->foreign('id_evento')->references('id')
        ->on('mgm_tbl_evento')->onDelete('cascade');
            $table->foreign('id_perfil_publico')->references('id')
        ->on('mgm_tbl_perfil_publico')->onDelete('cascade');

        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_perfil_publico_evevnto');
    }
}
