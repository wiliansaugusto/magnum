<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'mgm_tbl_perfil';

    protected $fillable = [ 'nm_perfil', ];

    public $timestamps = false;

    public function usuarios(){
        return $this->hasMany(
            Usuario::class, 'id_perfil', 'id');
    }
}
