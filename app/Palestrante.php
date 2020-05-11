<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Palestrante extends Model
{

    protected $table = 'mgm_tbl_palestrante';

    protected $fillable = [
        'nm_palestrante', 'ds_nacionalidade', 'ds_foto',
        'id_residencia', 'ds_ativo',
        'ds_chamada', 'ds_curriculo', 'ds_curriculo_tecnico',
        'ds_observacao', 'ds_investimento','ds_visivel_site',
        'ds_forma_pagamento', 'ds_equipamento_necessario', "id_usuario", 'ds_titulo_video', 'ds_url_video',
        'ds_descricao_video','nm_completo_palestrante','nr_rg_palestrante','nr_cpf_palestrante',
        'dt_nascimento_palestrante','cidade_palestrante',
    ];

    public function contatos()
    {
        return $this->hasMany(
            Contato::class, 'id_palestrante', 'id');
    }

    public function assessores()
    {
        return $this->hasMany(
            Acessor::class, 'id_palestrante');
    }

    public function dadosContratuais()
    {
        return $this->hasOne(DadosContratuais::class, 'id_palestrante', 'id');
    }

    public function usuario()
    {
        return $this->hasMany(Usuario::class, 'id_usuario');
    }

    public function bancos()
    {
        return $this->hasMany(Banco::class, 'id_palestrante');
    }

    public function palestranteCategoria()
    {
        return $this->belongsTo(
            'App\PalestranteCategoria', 'id_palestrante', 'id');
    }

    public function idiomas()
    {
        return $this->belongsToMany(
            Idiomas::class,
            'mgm_tbl_idiomas_palestrante',
            'id_palestrante',
            'id_idiomas');
    }

    public function valores()
    {
        return $this->hasMany(Valor::class, 'id_palestrante');
    }

    public function enderecos()
    {
        return $this->hasMany(Endereco::class, 'id_palestrante');
    }
}
