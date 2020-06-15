<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblTipoEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_tipo_evento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nm_tipo_evento',60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_tipo_evento');
    }
}
