<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'mgm_tbl_pais';
    public $timestamps=false;

    protected $fillable = [
        'nm_pais'
    ];

    public function estados()
    {
        return $this->hasMany('App\Cidade', 'id_pais');
    }
}
