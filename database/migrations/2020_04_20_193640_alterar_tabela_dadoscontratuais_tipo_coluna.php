<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarTabelaDadoscontratuaisTipoColuna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_dados_contratuais', function (Blueprint $table) {
            $table->string('nr_cnpj')->change();
            $table->string('nr_cpf')->change();
            $table->string('nr_insc_estadual')->change();
            $table->string('nr_rg')->change();
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
