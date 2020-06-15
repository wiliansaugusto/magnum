<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropostaItem extends Model
{
    //
    protected $table = 'mgm_tbl_proposta_item';

    protected $fillable = [
        "id_proposta",
        "id_proposta_item",
        "nm_tipo_servico",
        "vlr_servico_item",
        "id_palestrante"
    ];
}
