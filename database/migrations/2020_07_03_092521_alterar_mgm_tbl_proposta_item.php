<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarMgmTblPropostaItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_proposta_item', function (Blueprint $table) {
            //Adicionando solicitante e chave estrangeira no proposta Item
            $table->unsignedbigInteger('id_solicitante')->nullable($value = true);
            $table->foreign('id_solicitante')->references('id')->on('mgm_tbl_solicitante');
        });

        Schema::table('mgm_tbl_contato', function (Blueprint $table) {
            //Adicionando solicitante e chave no contato
            $table->unsignedbigInteger('id_solicitante')->nullable($value = true);
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
        Schema::table('mgm_tbl_proposta_item', function (Blueprint $table) {
            //
        
            $table->dropForeign('mgm_tbl_proposta_id_evento_foreign');
            $table->dropColumn('id_evento');
        });

        Schema::table('mgm_tbl_proposta', function (Blueprint $table) {
            //
        
            $table->dropForeign('mgm_tbl_proposta_id_evento_foreign');
            $table->dropColumn('id_evento');
        });
    }
}
