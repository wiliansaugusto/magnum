<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltTblPais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_pais', function (Blueprint $table) {
            $table->integer("cod_siscomex")->lenght(11)->nullable($value = true)	;
            $table->integer("cod_speed")->lenght(11)->nullable($value = true)	;

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
