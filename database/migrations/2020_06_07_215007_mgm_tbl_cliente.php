<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_cliente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_cliente', 60);
            $table->char('ind_cliente', 1);
            $table->char('tipo_cliente', 1)->nullable($value = true);
            $table->string('cpf', 11)->nullable($value = true);
            $table->string('cnpj', 14)->nullable($value = true);
            $table->string('obs_cliente', 200)->nullable($value = true);
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
       Schema::dropIfExists('mgm_tbl_cliente');
    }
}
