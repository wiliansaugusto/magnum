<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    protected $table = 'mgm_tbl_valor';

    protected $fillable = [
        'nr_valor', 'id_cidade', 'ds_observacao', 'id_palestrante',
        'id_tp_servico','id_evento'
    ];

    public function palestrante()
    {
        return $this->belongsTo('App\Palestrante', 'id_palestrante', 'id');
    }

    public function cidade()
    {
        return $this->belongsTo(
            'App\Cidade', 'id_cidade', 'id');
    }


    public function tipoServico()
    {
        return $this->belongsTo(
            'App\TiposDeServico', 'id_tp_servico', 'id');
    }

}
