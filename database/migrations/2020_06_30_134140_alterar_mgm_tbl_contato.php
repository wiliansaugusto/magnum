<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarMgmTblContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_contato', function (Blueprint $table) {
            //
            $table->unsignedbigIncrements('id_proposta');
            $table->foreign('id_proposta')->references('id')
        ->on('mgm_tbl_prposta')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mgm_tbl_contato', function (Blueprint $table) {
            //
        });
    }
}
