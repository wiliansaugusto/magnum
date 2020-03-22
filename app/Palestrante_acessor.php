<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palestrante_acessor extends Model
{
    protected $table = 'mgm_tbl_palestrante_acessor';

    protected $fillable = [
        'id_palestrante', 'id_acessor',
    ];
    public function acessorPalestrante()
    {
        return $this->belongsTo('App\Palestrante');
    }
}
