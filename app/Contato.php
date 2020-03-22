<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'ds_contato', 'id_tp_contato',
    ];
    protected $table = 'mgm_tbl_contato';
}
