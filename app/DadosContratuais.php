<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadosContratuais extends Model
{
    protected $table = 'mgm_tbl_dados_contratuais';

    protected $fillable = [
        'nm_razao_social', 'nr_cnpj', 'nr_cpf', 'nr_insc_estadual', 'nr_rg', 'dt_nascimento',
        'ds_observacao', 'id_palestrante'

    ];

    public function dadosContratuaisPalestrante(){
        return $this->belongsTo(Palestrante::class, 'id_palestrante', 'id');
    }
}
