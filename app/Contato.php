<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'mgm_tbl_contato';

    protected $fillable = [
        'id',
        'ds_contato',
        'id_tp_contato',
        'id_palestrante',
        'id_acessor',
        "id_cliente",
        "id_proposta"
    ];

    public function tiposContato()
    {
        return $this->belongsTo('App\TipoContato', 'id_tp_contato', 'id');
    }

    public function palestrante()
    {
        return $this->belongsTo(Palestrante::class,'id_palestrante', 'id');
    }

    public function assesor(){
        return $this->belongsTo('App\Acessor' , 'id_acessor','id');
    }

    public function proposta(){
        return $this->belongsTo('App\Proposta' , 'id_proposta','id');
    }

}
