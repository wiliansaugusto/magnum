<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   protected $fillable=[
       'nm_usuario', 'ds_nickname', 'email', 'password'
   ];
   protected $table='mgm_tbl_usuario';
}
