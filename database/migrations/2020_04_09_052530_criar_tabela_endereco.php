<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_endereco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nm_endereco");
            $table->string("ds_complemento")->nulllable();
            $table->string("nm_bairro");
            $table->string("nm_cidade");
            $table->string("nm_estado");
            $table->string("nr_endereco");
            $table->timestamps();
            $table->unsignedBigInteger('id_palestrante');
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante');
            $table->unsignedBigInteger('id_tp_endereco');
            $table->foreign('id_tp_endereco')->references('id')->on('mgm_tbl_tipo_endereco');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_endereco');
    }
}
