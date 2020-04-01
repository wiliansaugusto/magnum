<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MgmTblSubCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_sub_categoria', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('nm_sub_cat',40);
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')
            ->references('id')
            ->on('mgm_tbl_categoria')
            ->onDelete('cascade');
            $table->timestamps();

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
