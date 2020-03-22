<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'mgm_tbl_usuario';

    protected $fillable = [
        'nm_usuario', 'ds_nickname', 'email', 'password',
    ];

    public function usuario()
    {
        return $this->belongsTo('App\Palestrante');
    }
}
