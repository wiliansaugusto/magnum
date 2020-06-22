<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblProposta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_proposta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('num_proposta',10);
            $table->char('status_proposta',1)->nullable($value = true);
            $table->string('obs_proposta',200)->nullable($value = true);
            $table->unsignedBigInteger('id_evento')->nullable($value = true);
            $table->foreign('id_evento')->references('id')
                ->on('mgm_tbl_evento')->onDelete('cascade');
            $table->unsignedBigInteger('id_usuario')->nullable($value = true);
            $table->foreign('id_usuario')->references('id')
                ->on('mgm_tbl_usuario')->onDelete('cascade');
            $table->unsignedBigInteger('id_cliente')->nullable($value = true);
            $table->foreign('id_cliente')->references('id')
                ->on('mgm_tbl_cliente')->onDelete('cascade');
            $table->unsignedBigInteger('id_solicitante')->nullable($value = true);
            $table->foreign('id_solicitante')->references('id')
                ->on('mgm_tbl_cliente')->onDelete('cascade');
            $table->unsignedBigInteger('id_palestrante')->nullable($value = true);
            $table->foreign('id_palestrante')->references('id')
                ->on('mgm_tbl_palestrante')->onDelete('cascade');
            $table->unsignedBigInteger('id_tipo_servico')->nullable($value = true);
            $table->foreign('id_tipo_servico')->references('id')
                ->on('mgm_tbl_tipo_servico')->onDelete('cascade');
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
        Schema::table('mgm_tbl_proposta', function (Blueprint $table) {
            //
        });
    }
}
