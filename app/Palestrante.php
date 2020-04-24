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
        'ds_forma_pagamento', 'ds_equipamento_necessario', "id_usuario", 'ds_titulo_video', 'ds_url_video',
        'ds_descricao_video',
    ];

    public function contatos()
    {
        return $this->belongsTo(
            Contato::class, 'id_palestrante', 'id');
    }

    public function dadosContratuais()
    {
        return $this->hasMany('App\DadosContratuais', 'id_palestrante');
    }

    public function usuario()
    {
        return $this->hasMany(User::class);
    }

    public function palestranteBancos()
    {
        return $this->hasMany(Banco::class, 'id_palestrante');
    }

    public function palestranteCategoria()
    {
        return $this->belongsTo(
            'App\PalestranteCategoria', 'id_palestrante', 'id');
    }

    public function idiomas()
    {
        return $this->hasMany(Idiomas::class);
    }

    public function valores()
    {
        return $this->hasMany(Valor::class);
    }
}
