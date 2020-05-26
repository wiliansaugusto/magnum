<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterarUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('perfil_id');
            $table->foreign('perfil_id')->references('id')->on('mgm_tbl_perfil');
            $table->dropColumn('email');
            $table->dropColumn('password');
            $table->dropColumn('nm_usuario');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_usuario');
    }
}
