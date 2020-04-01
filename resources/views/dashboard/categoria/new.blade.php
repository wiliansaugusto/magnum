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
                    <div id="accordion">
                        @foreach ($categorias as $categoria)
                            <div class="card">
                                <div class="card-header card-header-custom-p" id="headingOne">
                                    <div class="row ">
                                        <div class="col-md-6 d-flex align-items-center">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapse{{$categoria->id}}"
                                                        aria-expanded="false" aria-controls="collapseOne">
                                                    {{$categoria->nm_categoria}}
                                                </button>
                                            </h5>
                                        </div>
                                        <div class="col-md-6 text-right d-flex justify-content-end align-items-center">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                    data-target="#modal{{$categoria->id}}"><i
                                                        class="fas fa-plus-circle"></i>
                                                Subcategoria
                                            </button>
                                            <button type="button" class="btn btn-success btn-sm ml-1"
                                                    data-toggle="modal"
                                                    data-target="#modalAlt{{$categoria->id}}"><i
                                                        class="fas fa-exclamation"></i>
                                                Editar
                                            </button>
                                            <button class="btn btn-danger btn-sm ml-1" type="submit"><i
                                                        class="fas fa-times"></i>
                                                Excluir
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapse{{$categoria->id}}" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <table class="table table-no-mb table-hover table-sm">
                                            <tbody>
                                            @foreach ($categoria->subCategorias as $subItem)
                                                <tr>
                                                    <td>
                                                        {{$categoria->nm_categoria}} -
                                                        {{$subItem->nm_sub_cat}}

                                                    </td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-success btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#modal{{$subItem->id}}"><i
                                                                    class="fas fa-exclamation"></i>
                                                            Editar
                                                        </button>
                                                        <button name="sub" value="1" class="btn btn-danger btn-sm"
                                                                type="submit"><i
                                                                    class="fas fa-times"></i> Excluir
                                                        </button>
                                                    </td>
                                                </tr>
                                                @include('dashboard.subcategoria.edit', ['subItem'=>$subItem])
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @include('dashboard.categoria.edit', ['categoria' => $categoria])
                            @include('dashboard.subcategoria.create', ['categoria' => $categoria])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.categoria.create')
@endsection