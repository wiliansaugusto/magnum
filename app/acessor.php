<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acessor extends Model
{
    protected $fillable = [
        'nm_acessor'
    ];
    protected $table = 'mgm_tbl_acessor';
}
