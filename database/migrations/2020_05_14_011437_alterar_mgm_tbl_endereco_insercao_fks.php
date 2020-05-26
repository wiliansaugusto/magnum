<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarMgmTblEnderecoInsercaoFks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_endereco', function (Blueprint $table) {
            $table->unsignedBigInteger('id_dado_contratual')->nullable();
            $table->foreign('id_dado_contratual')->references('id')->on('mgm_tbl_dados_contratuais');
            $table->unsignedBigInteger('id_cidade')->nullable();
           $table->foreign('id_cidade')->references('id')->on('mgm_tbl_cidade');
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
