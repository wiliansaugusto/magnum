<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $table = 'mgm_tbl_proposta';

    protected $fillable = [
        "num_proposta",
        "nm_solicitante",
        "status_proposta",
        "obs_proposta",
        "id_evento",
        "id_cliente",
        "id_palestrante",
        "id_tipo_servico",
        "vlr_total_proposta",
        "mensagem_proposta"
    ];
}
