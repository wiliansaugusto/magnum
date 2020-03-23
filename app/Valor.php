<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    protected $table = 'mgm_tbl_valor';

    protected $fillable = [
        'valor_decimal', 'id_cidade', 'ds_observacao',
    ];

    public function palestranteValor()
    {
        return $this->belongsToMany(
            'App\Palestrante',
            'mgm_tbl_palestrante',
            'id_palestrante',
            'id_valor'
        );
    }
}
