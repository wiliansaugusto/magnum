<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class palestrante_categoria extends Model
{
    protected $fillable = [
        'id_palestrante', 'id_categoria',
    ];
    protected $table = 'mgm_tbl_palestrante_categoria';
}
