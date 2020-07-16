<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $table = 'mgm_tbl_solicitante';

    protected $fillable = [
        'id',
        'nm_solicitante'        
        
    ];

    
    public function contatos()
    {
        return $this->hasMany('App\Contato' , 'id_solicitante','id');
    }
    
    public function proposta()
    {
        return $this->belongsTo('App\proposta', 'id_solicitante', 'id');
    }
     
}
