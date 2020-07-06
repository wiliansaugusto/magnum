<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAcessor extends Model
{
    protected $table = 'mgm_tbl_tp_acessor';

    protected $fillable = [
               'nm_tp_acessor',
        'id'
    ];


    public function tipoAcessor()
    {
        return $this->hasMany(
            'App\Acessor', 'id_tp_acessor','id');
    }
}
