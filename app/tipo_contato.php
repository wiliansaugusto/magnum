<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_contato extends Model
{
    protected $fillable = [
        'nm_tipo_contato',
    ];
    protected $table = 'mgm_tbl_tipo_contato';
}
