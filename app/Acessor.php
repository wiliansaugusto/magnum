<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acessor extends Model
{
    protected $fillable = [
        'nm_acessor'
    ];
    protected $table = 'mgm_tbl_acessor';
}
