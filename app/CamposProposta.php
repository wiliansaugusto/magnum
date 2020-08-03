<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CamposProposta extends Model
{
    protected $table = 'mgm_tbl_campos_proposta';

    protected $fillable = [
        'id',
        'tp_campo',
        'ds_campo'
    ];
}
