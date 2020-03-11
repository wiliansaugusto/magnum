<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acessor_contato extends Model
{
   protected $fillable=[
       'id_acessor', 'id_contato'
   ];
   protected $tabel='mgm_tbl_acessor_contato';
}
