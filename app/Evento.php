<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'mgm_tbl_evento';

    protected $fillable = [
        "id",
        "id_usuario",
        "id_proposta",
        "nm_evento",
        "tema_evento",
        "tema_palestra",
        "dt_evento_inicio",
        "dt_evento_fim",
        "tm_evento",
        "tm_duracao",
        "obs_data_evento",
        "qtd_participantes_evento",
        "perfil_participante_evento",
        "objetivo_evento",
        "vlr_verba_evento"
    ];

    public function eventoEndereco()
    {
        return $this->hasMany('App\Endereco', 'id_evento');
    }

    public function proposta()
    {
        return $this->hasOne(Proposta::class, 'id_proposta', 'id_proposta');
    }


}