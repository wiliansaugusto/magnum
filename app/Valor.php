<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
<<<<<<< HEAD
    protected $fillable = [
        'valor_decimal', 'id_cidade', 'ds_observacao',
    ];
    protected $table = 'mgm_tbl_valor';
=======
    protected $table = 'mgm_tbl_valor';

    protected $fillable = [
        'nr_valor', 'id_cidade', 'ds_observacao', 'id_palestrante',
    ];

    public function palestrante()
    {
        return $this->belongsTo('App\Palestrante', 'id_palestrante', 'id');
    }

    public function cidade()
    {
        return $this->belongsTo(
            'App\Cidade', 'id_cidade', 'id');
    }
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
}
