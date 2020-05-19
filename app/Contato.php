<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'ds_contato', 'id_tp_contato',
    ];
    protected $table = 'mgm_tbl_contato';
=======
    protected $table = 'mgm_tbl_contato';

    protected $fillable = [
        'id',
        'ds_contato',
        'id_tp_contato', 
        'id_palestrante', 
        'id_acessor'
    ];

    public function tiposContato()
    {
        return $this->belongsTo('App\TipoContato', 'id_tp_contato', 'id');
    }

    public function palestrante()
    {
        return $this->belongsTo(Palestrante::class,'id_palestrante', 'id');
    }

    public function assesor(){
        return $this->belongsTo('App\Acessor' , 'id_acessor','id');
    }

>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
}
