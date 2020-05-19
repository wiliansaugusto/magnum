<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acessor extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'nm_acessor'
    ];
    protected $table = 'mgm_tbl_acessor';
=======
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
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
}
