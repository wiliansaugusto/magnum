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
        "nr_endereco",
        "nr_cep",
        "obs_endereco",
        "id_evento",
        "id_cliente",
        "id_palestrante",
        "id_cidade",
        "id_dado_contratual",
        "id_tp_endereco",

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
        return $this->belongsTo('App\Cidade', 'id_cidade');
    }
}
