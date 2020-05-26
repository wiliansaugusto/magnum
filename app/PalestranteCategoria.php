<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PalestranteCategoria extends Model
{
    protected $table = 'mgm_tbl_palestrante_categoria';

    protected $fillable = [
        'id_palestrante', 'id_categoria', 'id_subcategoria'
    ];

    public function palestrantres()
    {
        return $this->hasMany(
            'App\Palestrante', 'id_palestrante');
    }
}
