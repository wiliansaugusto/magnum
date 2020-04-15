<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idiomas extends Model
{
    protected $table = 'mgm_tbl_idiomas';

    protected $fillable = [
        'ds_idioma',
        'id_palestrante'
    ];

    public function idiomaPalestrante()
    {
        return $this->belongsTo('App\Palestrante');
    }
}
