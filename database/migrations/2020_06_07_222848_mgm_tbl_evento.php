<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgmTblEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mgm_tbl_evento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->String('nm_evento',60);
            $table->longText('tema_evento');
            $table->date('dt_evento_inicio')->nullable($value = true);
            $table->date('dt_evento_fim')->nullable($value = true);
            $table->longText('obs_data_evento');
            $table->bigInteger('qtd_participantes_evento')->nullable($value = true);
            $table->string('perfil_participante_evento',100);
            $table->longText('objetivo_evento');
            $table->unsignedBigInteger('id_tipo_evento');
            $table->foreign('id_tipo_evento')->references('id')
                ->on('mgm_tbl_tipo_evento')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgm_tbl_evento');
    }
}
