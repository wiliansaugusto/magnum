<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acessor extends Model
{
    protected $table = 'mgm_tbl_acessor';

    protected $fillable = [
        'nm_acessor',
        'id_palestrante',
        'id_palestrante'
    ];
    public function contatos()
    {
        return $this->belongsTo(
            Contato::class, 'id_acessor', 'id');
    }


}
