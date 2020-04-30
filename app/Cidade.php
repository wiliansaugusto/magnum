<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'mgm_tbl_cidade';
    protected $fillable = [
        'id',
        'nm_cidade',
    ];
    public $timestamps=false;

    public function valores()
    {
        return $this->belongsTo('App\Valor', 'id_cidade', 'id');
    }
}
