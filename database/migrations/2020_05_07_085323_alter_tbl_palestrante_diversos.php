<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTblPalestranteDiversos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_palestrante', function (Blueprint $table) {
            $table->string('nm_completo_palestrante')->nullable();
            $table->string('nr_rg_palestrante')->nullable();
            $table->string('nr_cpf_palestrante')->nullable();
            $table->date('dt_nascimento_palestrante')->nullable();
            $table->string('cidade_palestrante')->nullable();
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
