<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $table = 'mgm_tbl_proposta';

    protected $fillable = [
        "num_proposta",
        "status_proposta",
        "obs_evento",
        "id_evento",
        "id_cliente",
        "id_palestrante",
        "id_tipo_servico"
    ];
}
