<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palestrante_valor extends Model
{
   protected $fillable=[
       'id_palestrante', 'id_valor'
   ];
   protected $table='mgm_tbl_palestrante_valor';
}
