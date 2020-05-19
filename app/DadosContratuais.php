<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class Dados_contratuais extends Model
=======
class DadosContratuais extends Model
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
{
    protected $table = 'mgm_tbl_dados_contratuais';

    protected $fillable = [
<<<<<<< HEAD
        'nm_razao_social', 'nr_ncpj', 'nr_cpf', 'nr_inscr_estadual', 'nr_rg', 'dt_nascimento',
        'ds_observacao', 'id_palestrante'
=======
        'nm_razao_social', 
        'nr_cnpj',
        'nr_cpf', 
        'nr_insc_estadual', 
        'nr_rg', 
        'dt_nascimento',
        'ds_observacao', 
        'id_palestrante',
        'nr_insc_municipal',
        'nm_completo'
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb

    ];

    public function dadosContratuaisPalestrante(){
<<<<<<< HEAD
        return $this->belongsTo('App\Palestrante');
=======
        return $this->hasOne(Palestrante::class, 'id_palestrante', 'id');
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
    }
}
