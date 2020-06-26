@extends('layouts.dashboard')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cliente</h3>
            </div>
            <div class="title_right text-right align-content-center">
            <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#frmNomeAberturaClienteModal"><i class="fa fa-plus "></i>
                    Cliente
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
                                        <label for="search-proposta">Procurar Cliente</label>
                                        <input type="search" id="search-Cliente"
                                               class="form-control form-control-sm"
                                               name="search"
                                               value="{{ $_GET['search'] or "" }}"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <br/>
                                        <button type="submit" class="btn btn-primary btn-sm float-left"
                                                style="width: 100%">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <br/>   
                                        <a href="/dashboard/cliente"
                                           class="btn btn-warning btn-sm text-white float-right" style="width: 100%">
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
                                    <th> Nrº Cliente</th>
                                    <th style="width: 30%"> Nome</th>
                                    <td>Tipo</td>
                                    <th> Solicitante | Cliente</th>
                                    <th>Data da Alteração</th>
                                    <th>Usuário Alteração</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($clientes as $cliente)
                                    @php
                                        $usuario = App\Usuario::withTrashed()
                                                    ->where('id',$cliente->id_usuario)
                                                    ->first();
                                    @endphp
                                    <tr>
                                        <td>{{$cliente->id}}</td>
                                        <td>{{$cliente->nm_cliente}}</td>
                                        <td>{{$cliente->tipo_cliente}}</td>
                                        <td>{{$cliente->ind_cliente }}</td>
                                        <td>{{date_format($cliente->updated_at,"d/m/Y H:i:s")}}</td>
                                        <td>{{$usuario->nm_usuario}}</td>
                                        <td class=" text-right">
                                            <a href="/dashboard/cliente/{{$cliente->id}}/edit"
                                               class="btn btn-primary btn-sm ml-1"><i
                                                        class='fa fa-edit'></i></a>

                                            <button type="button" class="btn btn-danger btn-sm ml-1"
                                                    data-toggle="modal"
                                                    data-target="#modalclienteDel{{$cliente->id}}"><i
                                                        class='fa fa-trash'></i></button>
                                            @include('dashboard.cliente.delete',['cliente'=>$cliente])
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.cliente.create')
@endsection
