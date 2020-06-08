<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposDeServico extends Model
{
    protected $table = 'mgm_tbl_tipo_servico';

    protected $fillable = [
        'nm_tipo_servico',
        'sg_tipo_servico',
    ];


    public function tipoServico()
    {
        return $this->belongsTo(
            'App\Valor', 'id_tp_servico','id');
    }
}
