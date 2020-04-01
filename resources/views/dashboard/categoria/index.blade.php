@extends('layouts.dashboard')

@section('content')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            <p class="text-center"><i class="far fa-thumbs-up"></i> {{ $mensagem }}</p>
        </div>
    @endif
    <div class="card">
        <div class="card-header ">
            <div class="row ">
                <div class="col-md-6">
                    <h3>Categorias</h3>
                </div>
                <div class="col-md-6 text-right">
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#frmCategoriaModal">
                        <i class="fas fa-plus"></i> Nova Categoria
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row ">
                <div class="col-md-12">
                    <table class="table table-hover table-sm">
                        @foreach ($categorias as $categoria)
                            <thead class="">
                            <th colspan="4"> Categoria</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$categoria->nm_categoria}}</td>
                                <td colspan="3" class="text-right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modal{{$categoria->id}}"><i class="fas fa-plus-circle"></i>
                                        Subcategoria
                                    </button>
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#modalAlt{{$categoria->id}}"><i class="fas fa-exclamation"></i>
                                        Editar
                                    </button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-times"></i>
                                        Excluir
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                            @if(!empty($categoria->subCategorias))
                                <thead>
                                <th colspan="3">Subcategorias {{$categoria->nm_categoria}}</th>
                                </thead>
                                <tbody>
                                @foreach ($categoria->subCategorias as $subItem)
                                    <tr>
                                        <td>
                                            {{$categoria->nm_categoria}} -
                                            {{$subItem->nm_sub_cat}}

                                        </td>
                                        <td class="text-right">
                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                    data-target="#modal{{$subItem->id}}"><i
                                                        class="fas fa-exclamation"></i>
                                                Editar
                                            </button>
                                            <button name="sub" value="1" class="btn btn-danger" type="submit"><i
                                                        class="fas fa-times"></i> Excluir
                                            </button>
                                        </td>
                                    </tr>
                                    @include('dashboard.subcategoria.edit', ['subItem'=>$subItem])
                                @endforeach
                                </tbody>
                            @endif
                            @include('dashboard.categoria.edit', ['categoria' => $categoria])
                            @include('dashboard.subcategoria.create', ['categoria' => $categoria])
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.categoria.create')
@endsection