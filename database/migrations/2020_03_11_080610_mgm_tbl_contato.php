<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MgmTblContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_contato', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ds_contato', 45);
            $table->timestamps();
            $table->unsignedBigInteger('id_tp_contato');
            $table->foreign('id_tp_contato')->references('id')->on('mgm_tbl_tipo_contato');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_contato');
    }
}
