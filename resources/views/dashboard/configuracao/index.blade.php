@extends('layouts.dashboard')

@section('content')
    <div class="">
        {{--Cadastro de Usuario--}}
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="page-title">
                    <div class="title_left" style="width: 100%">
                        <h3>Configuração de Usuário</h3>
                    </div>
                </div>
                @include('auth.register')
            </div>
            {{--Tipos de Serviço--}}
            <div class=" col-md-6 col-sm-12 ">
                <div class="page-title">
                    <div class="title_left" style="width: 100%">
                        <h3>Configuração de Valores</h3>
                    </div>
                </div>
                @include('dashboard.tipoServico.create')

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="page-title">
                    <div class="title_left" style="width: 100%">
                        <h3>Configuração de Endereço</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12  ">
                @include('dashboard.cidade.create')
            </div>
            <div class="col-md-6 col-sm-12  ">
                @include('dashboard.estado.create')

            </div>

        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-6 col-sm-12  ">
                <div class="page-title">
                    <div class="title_left" style="width: 100%">
                        <h3>Configuração de Assesores</h3>
                    </div>
                </div>
                @include('dashboard.tipoAcessor.create')
            </div>
            <div class="col-md-6 col-sm-12  ">
                <div class="page-title">
                    <div class="title_left" style="width: 100%">
                        <h3>Configuração de Forma de Pagamento</h3>
                    </div>
                </div>
                @include('dashboard.formapgto.create')
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-6 col-sm-12  ">
                <div class="page-title">
                    <div class="title_left" style="width: 100%">
                        <h3>Configuração de Equipamento Padrão</h3>
                    </div>
                </div>
                @include('dashboard.equipamentos.create')
            </div>
        </div>
    </div>


    @php
        $usuarios = App\Usuario::select('id','nm_usuario','created_at')->get();
        $tipos = App\TiposDeServico::all();
        $cidades = App\Cidade::all();
        $estados = App\Estado::all();
        $acessores = App\TipoAcessor::all();
        $formaPgtos = App\CamposProposta::where('tp_campo','formapgto')->orderBy('id', 'DESC')->get();
        $equipamentos = App\CamposProposta::where('tp_campo','equipamentos')->orderBy('id', 'DESC')->get();

    @endphp
    @include('dashboard.usuario.list', ['usuarios' => $usuarios])
    @include('dashboard.tipoServico.list',['tipos'=>$tipos])
    @include('dashboard.cidade.list')
    @include('dashboard.cidade.edit')
    @include('dashboard.estado.list')
    @include('dashboard.estado.edit')
    @include('dashboard.tipoAcessor.list',['acessor'=>$acessores])
    @include('dashboard.formapgto.list',['formaPgtos'=>$formaPgtos])
    @include('dashboard.equipamentos.list',['equipamentos'=>$equipamentos])


@endsection
