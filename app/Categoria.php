<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'mgm_tbl_categoria';

    protected $fillable = [
        'id',
        'nm_categoria',
    ];

    //TODO REFAZER
    public function palestranteCategorias()
    {
        return $this->hasManyThrough(
            Palestrante::class,
            'mgm_tbl_palestrante_categoria',
            'id_categoria',
            'id_palestrante',
            'id'
        );
    }

    public function subCategorias()
    {
        return $this->hasMany(SubCategoria::class, 'id_categoria');
    }

}
