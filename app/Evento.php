<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'mgm_tbl_evento';

    protected $fillable = [
        "id_usuario",
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
        "objetivo_evento"
    ];
}
