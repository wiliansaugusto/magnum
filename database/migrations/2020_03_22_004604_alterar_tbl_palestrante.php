<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterarTblPalestrante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_palestrante', function (Blueprint $table) {
            $table->integer('rank_palestrante');
            $table->unsignedBigInteger('id_usuario');
<<<<<<< HEAD
            $table->foreign('id_usuario')->references('id')->on('mgm_tbl_usuario');
=======
            $table->foreign('id_usuario')->references('id')->on('users');
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_palestrante', function (Blueprint $table) {
            $table->foreign('id')
                ->references('id')->on('mgm_tbl_usuario')
                ->onDelete('cascade');
        });}
}
