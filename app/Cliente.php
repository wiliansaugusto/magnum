<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'mgm_tbl_cliente';

    protected $fillable = [
        "nm_cliente",
        "ind_cliente",
        "tipo_cliente",
        "cpf",
        "cnpj",
        "obs_cliente"
    ];
}
