<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarTabelaPalestranteAddDadosvideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_palestrante', function (Blueprint $table) {
            $table->string('ds_titulo_video', 60)->nullable();
            $table->string('ds_url_video', 255)->nullable();
            $table->string('ds_descricao_video',255)->nullable();
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
