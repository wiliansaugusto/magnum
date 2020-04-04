<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palestrante extends Model
{
    protected $table = 'mgm_tbl_palestrante';

    protected $fillable = [
        'nm_palestrante', 'id_tp_nacionalidade', 'ds_foto',
        'id_residencia', 'ds_ativo', 'ds_visivel_chat',
        'ds_chamada', 'ds_curriculo', 'ds_curriculo_tecnico',
        'ds_observacao', 'ds_investimento',
        'ds_forma_pagamento', 'ds_equipamento_necessario', "id_usuario",
    ];

    //Relacionamento Muitos para muitos
    public function categorias()
    {
        return $this->belongsToMany(
            'App\Categoria',
            'mgm_tbl_palestrante_categoria',
            'id_palestrante',
            'id_categoria'
        );
    }
    public function contatos()
    {
        return $this->belongsTo(
            Contato::class, 'id_palestrante', 'id');
    }

    public function dadosContratuais()
    {
        return $this->hasMany('App\DadosContratuais');
    }
    public function palestranteAcessor()
    {
        return $this->belongsToMany(
            'App\Acessor',
            'mgm_tbl_palestrante_acessor',
            'id_palestrante',
            'id_acessor'
        );
    }
    public function palestranteAcessorContato()
    {
        return $this->hasManyThrough(
            'App\Acessor',
            'App\Contato',
            'id_acessor',
            'id_contato',
            'id',
            'id'

        );
    }

    public function palestranteValor()
    {
        return $this->belongsToMany('App\Valor');
    }

    public function usuario()
    {
        return $this->hasMany(User::class);
    }

}
