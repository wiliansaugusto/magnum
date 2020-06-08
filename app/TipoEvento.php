<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    protected $table = 'mgm_tbl_tipo_evento';

    protected $fillable = [
        "nm_tipo_evento"
    ];
}
