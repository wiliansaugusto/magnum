<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $fillable = [
        'nm_categoria',
    ];
    protected $table = 'mgm_tbl_categoria';
}
