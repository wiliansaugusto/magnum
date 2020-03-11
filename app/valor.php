<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class valor extends Model
{
    protected $fillable = [
        'valor_decimal', 'id_cidade', 'ds_observacao',
    ];
    protected $table = 'mgm_tbl_valor';
}
