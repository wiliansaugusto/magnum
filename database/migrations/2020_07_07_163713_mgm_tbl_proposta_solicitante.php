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

        Schema::table('mgm_tbl_proposta', function (Blueprint $table) {
            // Alterando Tipo do campo vlr_total_proposta de Decimal -> varchar
            $table->string('vlr_total_proposta')->change();
        });

        Schema::table('mgm_tbl_evento', function (Blueprint $table) {
            // Adicionando campo de verba do evento
            $table->string('vlr_verba_evento')->nullalbe($value = true);
            $table->unsignedBigInteger('id_proposta')->nullable($value = true);
            $table->foreign('id_proposta')->references('id')->on('mgm_tbl_proposta');
        });

        Schema::table('mgm_tbl_proposta', function (Blueprint $table) {
            //Retirando chave da tabela proposta e campo id_evento
            $table->dropForeign('mgm_tbl_proposta_id_evento_foreign');
            $table->dropColumn('id_evento');
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
