<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class palestrante extends Model
{
    protected $fillable = [
        'nm_palestrante', 'id_tp_nacionalidade', 'ds_foto', 'id_residencia', 'ds_ativo', 'ds_visivel_chat',
        'ds_chamada', 'ds_curriculo', 'ds_curriculo_tecnico', 'ds_observacao', 'ds_investimento',
        'ds_forma_pagamento','ds_equipamento_necessario'
    ];
    protected $table = 'mgm_tbl_palestrante';
}
