<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdcNullDadosContratuais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_dados_contratuais', function (Blueprint $table) {
            $table->string('nm_completo',80)->nullable()->change();
            $table->string('nm_razao_social')->nullable()->change();
            $table->string('nr_cpf')->nullable()->change();
            $table->string('nr_rg')->nullable()->change();
            $table->date('dt_nascimento')->nullable()->change();
            $table->string('nr_insc_estadual',20)->nullable()->change();
            $table->string('nr_insc_municipal',20)->nullable()->change();
            $table->string('nr_cnpj',20)->nullable()->change();

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
