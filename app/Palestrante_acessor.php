<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palestrante_acessor extends Model
{
   protected $fillable=[
       'id_palestrante', 'id_acessor'
   ];
   protected $table='mgm_tbl_palestrante_acessor';
}
