<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblBanco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_banco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nr_conta', 50);
            $table->string('nr_agencia',50);
            $table->unsignedBigInteger('id_nm_banco');
            $table->foreign('id_nm_banco')->references('id')->on('mgm_tbl_nome_banco')->onDelete('cascade');
            $table->unsignedBigInteger('id_palestrante');
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante')->onDelete('cascade');

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
        //
    }
}
