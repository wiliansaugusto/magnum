@extends('layouts.dashboard')

@section('content')
    <div class="">
        {{--Cadastro de Usuario--}}
        <div class="page-title">
            <div class="title_left">
                <h3>Configuração de Usuário</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-6 col-sm-12  ">
                @include('auth.register')
            </div>
            {{--Tipos de Serviço--}}
            <div class=" col-md-6 col-sm-12 ">
                @include('dashboard.tipoServico.create')

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-6 col-sm-12  ">
                @include('dashboard.cidade.create')

            </div>
            <div class="col-md-6 col-sm-12  ">
                @include('dashboard.estado.create')

            </div>
        </div>
    </div>
    @php
        $usuarios = App\Usuario::select('id','nm_usuario','created_at')->get();
        $tipos = App\TiposDeServico::all();
        $cidades = App\Cidade::all();
        $estados = App\Estado::all();

    @endphp
    @include('dashboard.usuario.list', ['usuarios' => $usuarios])
    @include('dashboard.tipoServico.list',['tipos'=>$tipos])
    @include('dashboard.cidade.list',['cidades'=>$cidades])
    @include('dashboard.estado.list',['estados'=>$estados])

@endsection
