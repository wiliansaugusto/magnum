<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'mgm_tbl_pais';
    public $timestamps=false;

    protected $fillable = [
        'nm_pais',
        'cod_siscomex',
        'cod_speed'
    ];

    public function estados()
    {
        return $this->hasMany('App\Estado', 'id_pais');
    }
}
