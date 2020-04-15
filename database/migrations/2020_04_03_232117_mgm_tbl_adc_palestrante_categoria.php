<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblAdcPalestranteCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_palestrante_categoria', function (Blueprint $table) {
            $table->unsignedBigInteger('id_subcategoria');
            $table->foreign('id_subcategoria')->references('id')->on('mgm_tbl_sub_categoria')->onDelete('cascade');

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
