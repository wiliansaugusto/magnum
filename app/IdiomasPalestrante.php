<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdiomasPalestrante extends Model
{

    protected $table = 'mgm_tbl_idiomas_palestrante';

    protected $fillable = [
        'id_idiomas',
        'id_palestrante',
    ];


}
