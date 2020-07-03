<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblPropostaEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_proposta_evento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedbigInteger('id_proposta')->nullable($value = true);
            $table->unsignedbigInteger('id_evento')->nullable($value = true);
            $table->foreign('id_proposta')->references('id')->on('mgm_tbl_proposta');
            $table->foreign('id_evento')->references('id')->on('mgm_tbl_evento');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_proposta_evento');
    }
}
