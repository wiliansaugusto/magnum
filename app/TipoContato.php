<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class Tipo_contato extends Model
{
    protected $fillable = [
        'nm_tipo_contato',
    ];
    protected $table = 'mgm_tbl_tipo_contato';
=======
class TipoContato extends Model
{
    protected $table = 'mgm_tbl_tipo_contato';

    protected $fillable = [
        'nm_tipo_contato',
    ];

    public function tiposContato()
    {
        return $this->hasMany('App\Contato','id_tp_contato');
    }
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
}
