<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'mgm_tbl_estado';
    protected $fillable = [
        'id',
        'nm_estado',
        'ds_sg_estado',
        'id_pais',
        'cod_ibge'
    ];
    public $timestamps=false;

    public function pais()
    {
        return $this->belongsTo('App\Pais', 'id_pais', 'id');
    }
    public function cidades()
    {
        return $this->hasMany('App\Cidade', 'id_estado', 'id');
    }
}
