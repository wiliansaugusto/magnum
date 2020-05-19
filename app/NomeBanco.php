<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NomeBanco extends Model
{
    protected $table = 'mgm_tbl_nome_banco';
    protected $fillable = [
        'nm_banco',
        'cd_banco',
    ];

    public function banco()
    {
        return $this->hasMany(
            Banco::class,
            'id'
        );
    }

}
