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
        return $this->belongsTo(
            Palestrante::class,
            'id_palestrante',
            'id'
        );
    }

    public function subCategorias()
    {
        return $this->hasMany(SubCategoria::class, 'id_categoria');
    }

}
