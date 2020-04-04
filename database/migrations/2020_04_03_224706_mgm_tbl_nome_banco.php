<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblNomeBanco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

Schema::create('mgm_tbl_nome_banco', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->string('nm_banco',150);
    $table->integer('cd_banco');
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
