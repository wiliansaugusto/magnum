<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idiomas extends Model
{
    protected $table = 'mgm_tbl_idiomas';

    protected $fillable = [
        'ds_idioma',
    ];

    public function palestrante()
    {
        return $this->belongsToMany(
            Idiomas::class,
            'mgm_tbl_idiomas_palestrante',
            'id_idiomas',
            'id_palestrante');
    }
}
