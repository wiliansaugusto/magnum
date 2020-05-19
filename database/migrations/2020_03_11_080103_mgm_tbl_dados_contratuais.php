<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MgmTblDadosContratuais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_dados_contratuais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_razao_social', 150);
            $table->integer('nr_cnpj');
            $table->integer('nr_cpf');
            $table->integer('nr_insc_estadual');
            $table->integer('nr_rg');
            $table->date('dt_nascimento');
            $table->longText('ds_observacao');
            $table->unsignedBigInteger('id_palestrante');
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante');
<<<<<<< HEAD

=======
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_dados_contratuais');
    }
}
