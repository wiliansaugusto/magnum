<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PkAcessorContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_banco', function (Blueprint $table) {
            $table->unsignedBigInteger('id_palestrante')->nullable()->change();
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante')->onDelete('cascade');

        });
        Schema::table('mgm_tbl_contato', function (Blueprint $table) {
            $table->unsignedBigInteger('id_acessor')->nullable();
            $table->foreign('id_acessor')->references('id')->on('mgm_tbl_acessor')->onDelete('cascade');});
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
