<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acessor extends Model
{
    protected $table = 'mgm_tbl_acessor';

    protected $fillable = [
        'id',
        'nm_acessor',
        'id_palestrante',
        'id_acessor'
    ];

    public function contatos()
    {
        return $this->hasMany('App\Contato','id');
    }

    public function palestrante()
    {
        return $this->belongsTo(Palestrante::class, 'id_palestrante', 'id');
    }
}
