<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'mgm_tbl_cidade';
    protected $fillable = [
        'id',
        'nm_cidade',
        'id_estado',
    ];
    public $timestamps=false;

    public function valores()
    {
        return $this->hasMany('App\Valor', 'id_cidade');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado', 'id_estado');
    }

    public function enderecos()
    {
        return $this->hasMany('App\Endereco', 'id_cidade');
    }
}
