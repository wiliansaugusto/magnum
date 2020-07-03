<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkAcessorTipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_acessor', function (Blueprint $table) {

            $table->unsignedbigInteger('id_tp_acessor')->nullable();
            $table->foreign('id_tp_acessor')->references('id')
                ->on('mgm_tbl_tp_acessor')->onDelete('cascade');
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
