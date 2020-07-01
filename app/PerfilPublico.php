<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PerfilPublico extends Model
{
    //
    protected $table = 'mgm_tbl_perfil_publico';

    protected $fillable = [
        "nm_perfil_publico",
        "obs"
     ];
    
     public function publico(){
        return $this->hasMany('id');
    }
}
