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
        "obs_cliente",
        "id_usuario"
        
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'id');
    }
}
