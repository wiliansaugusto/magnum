<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $table = 'mgm_tbl_sub_categoria';

    protected $fillable = [
        'nm_sub_cat',
        'id_categoria',
    ];

    public function subCategorias()
    {
        return $this->hasMany('App\SubCategoria',
        'id_categoria',
         'id'
        );

    }

}
