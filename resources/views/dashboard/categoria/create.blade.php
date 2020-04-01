@extends('layouts.dashboard')

@section('content')
@if(!empty($mensagem))
<div class="alert alert-success">
    <p class="text-center"><i class="far fa-thumbs-up"></i> {{ $mensagem }}</p>
</div>
@endif
<div class="container">

</div>
<div class="modal fade" id="frmCategoriaModal" tabindex="-1" role="dialog" aria-labelledby="frmCategoriaModalLabel"
    aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-group">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="frmCategoriaLabel">Cadastrar Categoria</h5>
                        </div>
                        <div class="modal-body text-left">
                            <label for="nm_categoria">Categoria Principal</label>
                            <input id="nm_categoria" type="text" placeholder="Informe a categoria"
                                class="form-control form-control-sm{{ $errors->has('nm_categoria') ? ' is-invalid' : '' }}"
                                name="nm_categoria" value="" required autofocus> <br>
                        </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
                <button type="reset" class="btn btn-warning">
                    Limpar
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
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
    <div class="row ">

        <div class="col-md-12">



            <table class="table table-hover">


                @foreach ($categorias as $categoria)
                <thead class="">
                    <th colspan="3"> Categoria</th>

                </thead>
                <tbody>
                    <tr>
                        <td>{{$categoria->nm_categoria}}</td>

                        <td colspan="2" class="text-right">
                            <div class="form-check form-check-inline">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#modal{{$categoria->id}}"><i class="fas fa-plus-circle"></i> Adicionar Sub-Categoria
                                </button>
                                <div class="modal fade" id="modal{{$categoria->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="Label{{$categoria->id}}" aria-hidden="true">
                                    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body text-left">
                                                <div class="form-group">
                                                    <form method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">

                                                            <h5 class="modal-title text-center"
                                                                id="Label{{$categoria->id}}">
                                                                Cadastrar Sub - Categoria
                                                            </h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="">Categoria
                                                                    Principal: {{$categoria->nm_categoria}} </label>
                                                                <input type="hidden" name="id_categoria"
                                                                    value="{{$categoria->id}}">

                                                            </div>
                                                            <label for="nm_sub_cat">Sub - Categoria</label>
                                                            <input id="nm_sub_cat" type="text"
                                                                placeholder="Informe a Sub - categoria"
                                                                class="form-control form-control-sm{{ $errors->has('nm_sub_cat') ? ' is-invalid' : '' }}"
                                                                name="nm_sub_cat" value="" required autofocus> <br>
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">
                                                    Salvar
                                                </button>
                                                <button type="reset" class="btn btn-warning">
                                                    Limpar
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Cancelar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#modalAlt{{$categoria->id}}"> <i class="fas fa-exclamation"></i> Alterar Categoria Principal
                            </button>
                            <div class="modal fade" id="modalAlt{{$categoria->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="LabelAlt{{$categoria->id}}" aria-hidden="true">
                                <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body text-left">
                                            <div class="form-group">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="LabelAlt{{$categoria->id}}">
                                                        Alterar Categoria
                                                    </h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <form method="POST" action="categoria/update/{{$categoria->id}}"
                                                            enctype="multipart/form-data"
                                                            onsubmit="return confirm('Você deseja Alterar a Categoria {{addslashes($categoria->nm_categoria)}} ?')">

                                                            @csrf

                                                            <label>Categoria Atual: {{$categoria->nm_categoria}}
                                                            </label>
                                                            <input type="hidden" name="id" value="{{$categoria->id}}">
                                                            <br><label for="nm_categoria">Nova informação</label>
                                                            <input id="nm_categoria" type="text"
                                                                placeholder="Informe a nova categoria"
                                                                class="form-control form-control-sm{{ $errors->has('nm_categoria') ? ' is-invalid' : '' }}"
                                                                name="nm_categoria" value="" required autofocus>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">
                                                    Salvar
                                                </button>
                                                <button type="reset" class="btn btn-warning">
                                                    Limpar
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Cancelar</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <form action="categoria/{{$categoria->id}}" method="post"
                                onsubmit="return confirm('Você deseja excluir a Categoria {{addslashes($categoria->nm_categoria)}} ?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-times"></i> Remover Categoria</button>
                            </form>
                        </td>
                    </tr>

                </tbody>

                <thead>

                    <th colspan="3">Sub - Categorias {{$categoria->nm_categoria}}</th>


                </thead>
                @foreach ($categoria->subCategorias as $subItem)
                <tbody>
                    <tr>
                        <td>
                            {{$categoria->nm_categoria}} -
                            {{$subItem->nm_sub_cat}}

                        </td>

                        <td colspan="2" class="text-right">
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#modal{{$subItem->id}}"><i class="fas fa-exclamation"></i> Alterar Sub Categoria
                            </button>
                            <div class="modal fade" id="modal{{$subItem->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="Label{{$subItem->id}}" aria-hidden="true">
                                <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Label{{$subItem->id}}">
                                                        Alterar Sub - Categoria
                                                    </h5>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <div class="form-group">
                                                        <form method="POST" action="categoria/update/{{$subItem->id}}"
                                                            enctype="multipart/form-data"
                                                            onsubmit="return confirm('Você deseja Alterar a Sub - Categoria {{addslashes($subItem->nm_sub_cat)}} ?')">

                                                            @csrf

                                                            <label>Categoria Atual: {{$subItem->nm_sub_cat}}
                                                            </label>
                                                            <input type="hidden" name="id" value="{{$subItem->id}}"><br>
                                                            <label for="nm_sub_cat">Nova informação</label>
                                                            <input id="nm_sub_cat" type="text"
                                                                placeholder="Informe a Sub - categoria"
                                                                class="form-control form-control-sm{{ $errors->has('nm_sub_cat') ? ' is-invalid' : '' }}"
                                                                name="nm_sub_cat" value="" required autofocus>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">
                                                    Salvar
                                                </button>
                                                <button type="reset" class="btn btn-warning">
                                                    Limpar
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Cancelar</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <form action="categoria/{{$subItem->id}}" method="post"
                                onsubmit="return confirm('Você deseja excluir {{addslashes($subItem->nm_sub_cat)}}?')">
                                @csrf
                                @method('DELETE')
                                <button name="sub" value="1" class="btn btn-danger" type="submit"><i class="fas fa-times"></i> Remover Sub - Categoria</button>
                            </form>
                        </td>
                    </tr>
                </tbody>

                @endforeach

                @endforeach
            </table>




        </div>
    </div>

</div>

</div>


@endsection
