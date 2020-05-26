<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEndereco extends Model
{
    protected $table = 'mgm_tbl_tipo_endereco';

    protected $fillable = [
        'nm_tipo_endereco',
    ];

    public function enderecos()
    {
        return $this->hasMany('App\Endereco');
    }
}
