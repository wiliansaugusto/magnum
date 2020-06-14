<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarTblProposta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_proposta', function (Blueprint $table) {
            //
           $table->decimal(10,2)->nullable($value = true);;
           $table->longText('mensagem_proposta')->nullable($value = true);;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mgm_tbl_proposta', function (Blueprint $table) {
            //
        });
    }
}
