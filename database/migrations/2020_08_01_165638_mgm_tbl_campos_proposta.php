<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblCamposProposta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_campos_proposta', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('tp_campo',20)->nullable();
            $table->longText('ds_campo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_campos_proposta');
    }
}
