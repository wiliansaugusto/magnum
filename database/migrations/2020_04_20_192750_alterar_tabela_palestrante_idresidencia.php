<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarTabelaPalestranteIdresidencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_palestrante', function (Blueprint $table) {
            $table->string('id_tp_nacionalidade')->nullable()->change();
            $table->string('ds_foto', 255)->nullable()->change();
            $table->dropColumn('id_residencia')->change();
            $table->string('ds_chamada', 300)->nullable()->change();
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
