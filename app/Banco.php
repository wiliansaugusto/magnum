<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $table = 'mgm_tbl_banco';

    protected $fillable = [
        'id',
        'nr_conta',
        'nr_agencia',
        'id_nm_banco',
        'id_palestrante'
    ];
    public function palestrante()
    {
        return $this->belongsTo(Palestrante::class, 'id');

    }

    public function nomeBanco()
    {
        return $this->belongsTo(
            NomeBanco::class,
            'id_nm_banco',
            'id'
        );
    }
}
