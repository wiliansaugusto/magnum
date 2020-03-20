<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palestrante_categoria extends Model
{
    protected $fillable = [
        'id_palestrante', 'id_categoria',
    ];
    protected $table = 'mgm_tbl_palestrante_categoria';
}
