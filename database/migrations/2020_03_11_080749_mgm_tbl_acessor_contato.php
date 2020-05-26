<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MgmTblAcessorContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_acessor_contato', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_contato');
            $table->foreign('id_contato')->references('id')->on('mgm_tbl_contato');
            $table->unsignedBigInteger('id_acessor');
            $table->foreign('id_acessor')->references('id')->on('mgm_tbl_acessor');
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
        Schema::dropIfExists('mgm_tbl_acessor_contato');
    }
}
