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
        @php
            $palestrantes = App\Palestrante::where('id','>',0)->paginate(10);
        @endphp
        <div class="row justifi-content">
            <div class="col-md-12 ">
                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th style="width: 60%">Palestrante</th>
                        <th>Data da Alteração</th>
                        <th>Usuário Alteração</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($palestrantes as $palestrante)
                        @php
                            $usuario = App\User::find($palestrante->id_usuario);
                        @endphp
                        <tr>
                            <td >{{$palestrante->nm_palestrante}}</td>
                            <td>{{date_format($palestrante->updated_at,"d/m/Y H:i:s")}}</td>
                            <td>{{$usuario->name}}</td>
                            <td class=" text-right">
                                <button type="button" class="btn btn-primary btn-sm ml-1"><i class='fas fa-edit'></i></button>

                                <button type="button" class="btn btn-danger btn-sm ml-1" data-toggle="modal"
                                        data-target="#modalPalestranteDel{{$palestrante->id}}"><i class='fas fa-trash'></i></button>
                                @include('dashboard.palestrante.delete',['palestrante'=>$palestrante])
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    {{$palestrantes->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboard.palestrante.create')
@include('dashboard.banco.create')
@include('dashboard.banco.remover')
@include('dashboard.valor.create')
@include('dashboard.valor.remover')
@include('dashboard.endereco.create')
@include('dashboard.endereco.remover')
@include('dashboard.assessor.create')
@include('dashboard.categoria.select')
@include('dashboard.contato.create')
@include('dashboard.contato.remover')
@include('dashboard.idiomas.create')

@include('dashboard.descricao.chamada.create')
@include('dashboard.descricao.curriculo.create')
@include('dashboard.descricao.curriculoTecnico.create')
@include('dashboard.descricao.formaPagamento.create')
@include('dashboard.descricao.investimento.create')
@include('dashboard.descricao.equipNecessario.create')
@include('dashboard.descricao.observacao.create')
@include('dashboard.descricao.remover')


@endsection
