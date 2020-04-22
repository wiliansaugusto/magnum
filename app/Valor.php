<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    protected $table = 'mgm_tbl_valor';

    protected $fillable = [
        'nr_valor', 'id_cidade', 'ds_observacao', 'id_palestrante',
    ];

    public function palestrante()
    {
        return $this->hasMany(
            'App\Palestrante', 'id_palestrante');
    }

    public function cidade()
    {
        return $this->hasMany(
            'App\Cidade', 'id_cidade');
    }
}
