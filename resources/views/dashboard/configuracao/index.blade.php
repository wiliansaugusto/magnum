@extends('layouts.dashboard')

@section('content')
    <div class="">
        {{--Cadastro de Usuario--}}
        <div class="page-title">
            <div class="title_left">
                <h3>Configuração de Plano</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-6 col-sm-12  ">
                @include('auth.register')
            </div>
        </div>
    </div>
@endsection