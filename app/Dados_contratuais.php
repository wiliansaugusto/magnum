<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dados_contratuais extends Model
{
    protected $table = 'mgm_tbl_dados_contratuais';

    protected $fillable = [
        'nm_razao_social', 'nr_ncpj', 'nr_cpf', 'nr_inscr_estadual', 'nr_rg', 'dt_nascimento',
        'ds_observacao', 'id_palestrante'

    ];

    public function dadosContratuaisPalestrante(){
        return $this->belongsTo('App\Palestrante');
    }
}
