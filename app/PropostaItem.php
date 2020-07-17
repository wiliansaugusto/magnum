<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropostaItem extends Model
{
    //
    protected $table = 'mgm_tbl_proposta_item';

    protected $fillable = [
        "id_proposta_item",
        "id_proposta",
        "num_item_proposta",        
        "nm_tipo_servico",
        "vlr_servico_item",
        "id_palestrante",
        "id_solicitante"
    ];

    public function usuario()
    {
        return $this->hasMany(Usuario::class, 'id');
    }

    public function solicitante()
    {
        return $this->hasMany(Solicitante::class, 'id');
    }

    public function proposta()
    {
        return $this->hasMany(Proposta::class, 'id');
    }

}
