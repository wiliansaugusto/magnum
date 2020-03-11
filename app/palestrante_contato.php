<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class palestrante_contato extends Model
{
protected $fillable=[
    'id_palestrante','id_contato'
];
protected $table='mgm_tbl_palestrante_contato';

}
