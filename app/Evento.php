<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'mgm_tbl_evento';

    protected $fillable = [
        "nm_evento",
        "tema_evento",
        "dt_evento_inicio",
        "dt_evento_fim",
        "obs_data_evento",
        "qtd_participantes_evento",
        "perfil_participantes_evento",
        "objetivo_evento"
    ];
}
