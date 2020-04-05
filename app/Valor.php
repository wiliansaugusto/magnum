<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    protected $table = 'mgm_tbl_valor';

    protected $fillable = [
        'valor_decimal', 'id_cidade', 'ds_observacao',
    ];

    public function valorPalestrante()
    {
        return $this->hasManyThrough(
            Palestrante::class,
            'mgm_tbl_paestrante_valor',
            'id_palestrante',
            'id_valor'
        );
    }
}
