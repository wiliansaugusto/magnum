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
            $table->bigInteger('id_usuario');
            $table->date('dt_evento_inicio')->nullable($value = true);
            $table->date('dt_evento_fim')->nullable($value = true);
            $table->longText('obs_data_evento')->nullable($value = true);
            $table->bigInteger('qtd_participantes_evento')->nullable($value = true);
            $table->string('perfil_participante_evento',100)->nullable($value = true);
            $table->longText('objetivo_evento')->nullable($value = true);
            $table->unsignedBigInteger('id_tipo_evento')->nullable($value = true);;
           

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
