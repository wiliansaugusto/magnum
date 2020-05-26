<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterarMgmTblUsuarioCamposdouser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mgm_tbl_usuario', function (Blueprint $table) {
            $table->renameColumn('perfil_id', 'id_perfil');
        });

        Schema::table('mgm_tbl_usuario', function (Blueprint $table) {
            $table->string('nm_usuario', 60);
            $table->string('ds_nickname', 10)->nullable()->change();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreign('id_perfil')->references('id')->on('mgm_tbl_perfil');
            $table->rememberToken();
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
