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
                                            <td>{{$palestrante->nm_palestrante}}</td>
                                            <td>{{date_format($palestrante->updated_at,"d/m/Y H:i:s")}}</td>
                                            <td>{{$usuario->name}}</td>
                                            <td class=" text-right">
                                                <a href="/dashboard/palestrante/{{$palestrante->id}}/edit" class="btn btn-primary btn-sm ml-1"><i
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.palestrante.create')
@endsection
