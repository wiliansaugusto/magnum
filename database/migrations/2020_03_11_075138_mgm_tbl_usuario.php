<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MgmTblUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_usuario', 60);//remover
            $table->string('ds_nickname', 15);
            $table->string('email', 255);//remover
            $table->string('password', 32);//remover
            //$table->integer('perfil_id');//tem relacionamento com a tabela perfil( id, nm_perfil);
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
        Schema::dropIfExists('mgm_tbl_usuario');
    }
}
