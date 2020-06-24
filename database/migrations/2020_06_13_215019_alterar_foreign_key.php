<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_evento', function (Blueprint $table) {
            //
            $table->foreign('id_tipo_evento')->references('id')
            ->on('mgm_tbl_tipo_evento')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')
            ->on('mgm_tbl_usuario')->onDelete('cascade');

        });

        Schema::table('mgm_tbl_cliente', function (Blueprint $table) {
            //
            $table->foreign('id_usuario')->references('id')
            ->on('mgm_tbl_usuario')->onDelete('cascade');

        });

        



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mgl_tbl_evento', function (Blueprint $table) {
            //
        });
    }
}
