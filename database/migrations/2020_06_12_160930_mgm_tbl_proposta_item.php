<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblPropostaItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_proposta_item', function (Blueprint $table) {
            //
            $table->bigIncrements('id_proposta', 'id_proposta_item');
            $table->bigInteger('id_proposta_item');
            $table->string('nm_tipo_servico',200)->nullable($value = true);;
            $table->decimal('vlr_servico_item',10,2)->nullable($value = true);;
            $table->bigInteger('id_palestrante')->nullable($value = true);;
            $table->foreign('id_proposta')->references('id')->on('mgm_tbl_proposta');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mgm_tbl_proposta_item', function (Blueprint $table) {
            //
        });
    }
}
