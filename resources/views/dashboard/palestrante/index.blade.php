<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Palestrantes</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome Campanha</th>
                                <!-- <th>Ações</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($campanhas as $campanha)
                                <tr>
                                    <td>{{ $campanha->id }}</td>
                                    <td>{{ $campanha->nome }}</td>
                                    <!-- <td>
                                        <a href="{{ $campanha->id }}" class="btn btn-primary">
                                            Editar
                                        </a>

                                        <a href="{{ $campanha->id }}" class="btn btn-danger">
                                            Excluir
                                        </a>
                                    </td> -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
=======
@extends('layouts.dashboard')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Palestrante</h3>
            </div>
            <div class="title_right text-right align-content-center">
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#frmNomePalestranteModal"><i class="fa fa-plus "></i>
                    Palestrante
                </button>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="col-md-12 col-sm-12">
                            <form action="" method="GET">
                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-md-10 col-sm-10">
                                        <label for="search-palestrantre">Procurar Palestrante</label>
                                        <input type="search" id="search-palestrantre"
                                               class="form-control form-control-sm"
                                               name="search"
                                               value="{{ $_GET['search'] or "" }}"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <br/>
                                        <button type="submit" class="btn btn-primary btn-sm float-left" style="width: 100%">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <br/>
                                        <a href="/dashboard/palestrante" class="btn btn-warning btn-sm text-white float-right" style="width: 100%">
                                            <i class="fa fa-eraser"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
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
                                        $usuario = App\Usuario::withTrashed()
                                                    ->where('id',$palestrante->id_usuario)
                                                    ->first();
                                    @endphp
                                    <tr>
                                        <td>{{$palestrante->nm_palestrante}}</td>
                                        <td>{{date_format($palestrante->updated_at,"d/m/Y H:i:s")}}</td>
                                        <td>{{$usuario->nm_usuario}}</td>
                                        <td class=" text-right">
                                            <a href="/dashboard/palestrante/{{$palestrante->id}}/edit"
                                               class="btn btn-primary btn-sm ml-1"><i
                                                        class='fa fa-edit'></i></a>

                                            <button type="button" class="btn btn-danger btn-sm ml-1"
                                                    data-toggle="modal"
                                                    data-target="#modalPalestranteDel{{$palestrante->id}}"><i
                                                        class='fa fa-trash'></i></button>
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
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
@endsection
=======
    </div>

    @include('dashboard.palestrante.create')
@endsection
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
