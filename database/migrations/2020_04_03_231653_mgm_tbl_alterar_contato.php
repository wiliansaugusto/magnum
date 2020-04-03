<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MgmTblAlterarContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_contato', function (Blueprint $table) {
            $table->unsignedBigInteger('id_palestrante');
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante')->onDelete('cascade');
            $table->unsignedBigInteger('id_acessor');
            $table->foreign('id_acessor')->references('id')->on('mgm_tbl_acessor')->onDelete('cascade');

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
