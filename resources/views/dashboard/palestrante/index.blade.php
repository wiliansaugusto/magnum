@extends('layouts.dashboard')

@section('content')
<div class="card">
    <div class="card-header ">
        <div class="row justify-content-center">
            <div class="col-md-6 sm-12 text-left">
                <h3>Palestrante</h3>
            </div>
            <div class="col-md-6 sm-12 text-right">
                <div class="form-check form-check-inline">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#frmNomePalestranteModal"><i class="fas fa-plus "></i> Adicionar
                        Palestrante
                    </button>
                </div>
            </div>
        </div>

    </div>
    <div class="card-body">
        @include('dashboard.palestrante.edit')
    </div>
</div>

@include('dashboard.palestrante.create')
@include('dashboard.banco.create')
@include('dashboard.endereco.create')
@include('dashboard.assessor.create')
@include('dashboard.categoria.select')
@include('dashboard.contato.create')
@include('dashboard.idiomas.create')

@include('dashboard.descricao.chamada.create')
@include('dashboard.descricao.curriculo.create')
@include('dashboard.descricao.curriculoTecnico.create')
@include('dashboard.descricao.formaPagamento.create')
@include('dashboard.descricao.investimento.create')
@include('dashboard.descricao.equipNecessario.create')
@include('dashboard.descricao.observacao.create')

@endsection
