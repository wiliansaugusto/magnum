<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltTblEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_endereco', function (Blueprint $table) {

            $table->unsignedBigInteger('id_evento')->nullable($value = true);
            $table->foreign('id_evento')->references('id')->on('mgm_tbl_evento');
            $table->longText('obs_endereco')->nullable($value = true);

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
