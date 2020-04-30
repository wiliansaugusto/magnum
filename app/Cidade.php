<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'mgm_tbl_cidade';
    protected $fillable = [
        'nm_cidade',
    ];
    public $timestamps=false;

    public function valores()
    {
        return $this->hasMany('App\Valor', 'id_cidade');
    }
}
