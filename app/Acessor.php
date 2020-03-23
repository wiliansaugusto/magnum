<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acessor extends Model
{
    protected $table = 'mgm_tbl_acessor';

    protected $fillable = [
        'nm_acessor',
    ];
    public function acessorPalestrante()
    {
        return $this->belongsToMany(
            'App\Palestrante',
            'mgm_tbl_palestante',
            'id_acessor',
            'id_palestrante'
        );
    }
    public function acessorContato(){
        return $this->belongsToMany(
            'App\Contato',
            'mgm_tbl_contato',
            'id_acessor',
            'id_contato'
        );
    }
    public function palestranteAcessorContato(){
    return $this->hasManyThrough('App\Palestrante','App\Contato');
    }

}
