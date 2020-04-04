<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acessor extends Model
{
    protected $table = 'mgm_tbl_acessor';

    protected $fillable = [
        'nm_acessor',
    ];
    public function acessorContato()
    {
        return $this->hasMany(
            Contato::class, 'id_contato'
        );
    }


}
