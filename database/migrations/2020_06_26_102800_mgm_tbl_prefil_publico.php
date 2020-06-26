<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblPrefilPublico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_perfil_publico', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nm_perfil_publico', 100)->nullable();
            $table->longText('obs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_perfil_publico');
    }
}
