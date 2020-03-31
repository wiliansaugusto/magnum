<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $table = 'mgm_tbl_sub_categoria';

    protected $fillable = [
        'id_categoria',
        'nm_sub_cat',
    ];

    public function Categoria()
    {
        return $this->belongsToMany(Categoria::class,'id_categoria');

    }

}
