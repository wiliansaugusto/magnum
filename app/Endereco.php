<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'mgm_tbl_endereco';

    protected $fillable = [
        "nm_endereco",
        "ds_complemento", 
        "nm_bairro", 
        "nm_cidade", 
        "nm_estado", 
        "nr_endereco",
        "id_palestrante", 
        "id_tp_endereco", 
        "nr_cep"
    ];

    public function tipoEndereco()
    {
        return $this->belongsTo('App\TipoEndereco', 'id_tp_endereco');
    }

    public function palestrante()
    {
        return $this->belongsTo('App\Palestrante', 'id_palestrante', 'id');
    }
}
