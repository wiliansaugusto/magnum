<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'mgm_tbl_contato';

    protected $fillable = [
        'ds_contato', 'id_tp_contato',
    ];

    public function tiposContato()
    {
        return $this->belongsTo('App\TipoContato');
    }
    public function contatosPalestrante()
    {

        return $this->hasMany('App\Palestrante_contato');
    }

    public function palestranteAcessorContato()
    {
        return $this->hasManyThrough('App\Palestrante', 'App\Acessor');
    }

}
