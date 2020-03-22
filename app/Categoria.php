<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
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
}
