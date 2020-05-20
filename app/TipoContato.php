<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoContato extends Model
{
    protected $table = 'mgm_tbl_tipo_contato';

    protected $fillable = [
        'nm_tipo_contato',
    ];

    public function tiposContato()
    {
        return $this->hasMany('App\Contato','id_tp_contato');
    }
}
