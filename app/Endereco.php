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
        "id_cidade",
        "nr_endereco",
        "id_palestrante", 
        "id_dado_contratual",
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

    public function dadoContratual()
    {
        return $this->belongsTo('App\DadosContratuais', 'id_dado_contratual', 'id');
    }

    public function cidade()
    {
        return $this->hasMany('App\Cidade', 'id_cidade', 'id');
    }
}
