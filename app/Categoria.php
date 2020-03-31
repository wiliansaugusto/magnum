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

    public function palestrantes()
    {
        return $this->belongsToMany(
            'App\Palestrante',
            'mgm_tbl_palestrante_categoria',
            'categoria_id',
            'palestrante_id'
        );
    }
    public function subCategorias()
    {

        return $this->hasMany(SubCategoria::class, 'id_categoria');

    }

}
