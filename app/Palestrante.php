<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palestrante extends Model
{
    protected $table = 'mgm_tbl_palestrante';

    protected $fillable = [
        'nm_palestrante', 'id_tp_nacionalidade', 'ds_foto', 'id_residencia', 'ds_ativo', 'ds_visivel_chat',
        'ds_chamada', 'ds_curriculo', 'ds_curriculo_tecnico', 'ds_observacao', 'ds_investimento',
        'ds_forma_pagamento', 'ds_equipamento_necessario',
    ];

    public function categorias(){
        return $this->belongsToMany(
            'App\Categoria',
            'palestrante_categoria',
            'palestrante_id',
            'categoria_id'
        )
    }

    public function contatosPalestrante()
    {

        return $this->hasMany('App\Palestrante_contato');
    }
    public function dadosContratuais()
    {

        return $this->hasMany('App\Dados_contratuais');
    }
    public function palestranteAcessor()
    {
        return $this->hasMany('App\Palestrante_acessor');
    }
}
