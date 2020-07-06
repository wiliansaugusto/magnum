<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acessor extends Model
{
    protected $table = 'mgm_tbl_solicitante';

    protected $fillable = [
        'id',
        'nm_solicitante'        
        
    ];

    public function contatos()
    {
        return $this->hasMany(Contato::class , 'id_solicitante','id');
    }

    /*public function tiposAcessor()
    {
        return $this->belongsTo(TipoAcessor::class,'id_tp_acessor', 'id');
    }*/
}
