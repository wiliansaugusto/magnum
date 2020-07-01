<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $table = 'mgm_tbl_proposta';

    protected $fillable = [
        "num_proposta",
        "nm_contratante",
        "nm_solicitante",
        "status_proposta",
        "obs_proposta",
        "id_evento",
        "id_cliente",
        "id_solicitante",
        "id_usuario",
        "id_palestrante",
        "id_tipo_servico",
        "vlr_total_proposta",
        "mensagem_proposta"
    ];

    public function usuario()
    {
        return $this->hasMany(Usuario::class, 'id_usuario');
    }

    public function evento()
    {
        return $this->hasMany(Evento::class, 'id_evento');
    }

    public function cliente()
    {
        return $this->hasMany(Cliente::class, 'id_cliente');
    }

    public function solicitante()
    {
        return $this->hasMany(Cliente::class, 'id_cliente');
    }
    public function contatos()
    {
        return $this->hasMany(
            Contato::class, 'id_proposta', 'id');
    }



}
