<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblEnderecoCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_endereco', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')
                ->on('mgm_tbl_cliente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mgm_tbl_endereco', function (Blueprint $table) {
            //
        });
    }
}
