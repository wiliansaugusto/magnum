<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeletePalestrante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('mgm_tbl_palestrante_banco');
        Schema::table('mgm_tbl_banco', function (Blueprint $table) {
            $table->unsignedBigInteger('id_palestrante')->nullable()->change();
            $table->foreign('id_palestrante')->references('id')->on('mgm_tbl_palestrante')->onDelete('cascade');

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
