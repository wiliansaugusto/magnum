<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'nm_categoria',
    ];
    protected $table = 'mgm_tbl_categoria';

    public function palestrantes(){
        return $this->belongsToMany(
            'App\Palestrante',
            'palestrante_categoria',
            'categoria_id',
            'palestrante_id'
        )
    }
=======
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

>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
}
