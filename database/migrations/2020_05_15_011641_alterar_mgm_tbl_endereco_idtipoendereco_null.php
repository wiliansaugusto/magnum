<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarMgmTblEnderecoIdtipoenderecoNull extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_endereco', function (Blueprint $table) {
            $table->string("nm_endereco")->nullable()->change();
            $table->string("nm_bairro")->nullable()->change();
            $table->string("nm_cidade")->nullable()->change();
            $table->string("nm_estado")->nullable()->change();
            $table->string("nr_endereco")->nullable()->change();
            $table->string("nr_cep")->nullable()->change();
            $table->unsignedBigInteger('id_tp_endereco')->nullable()->change();
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
