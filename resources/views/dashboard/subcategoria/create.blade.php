@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#frmCategoriaModal">Adicionar Categoria
                    </button>
                    <div class="form-check form-check-inline">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#frmSubCategoriaModal">Adicionar Sub-Categoria
                        </button>
                </div>
            </div>
        </div>
    </div>
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
                        <div class="modal-body">
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

<div class="modal fade" id="frmSubCategoriaModal" tabindex="-1" role="dialog" aria-labelledby="frmSubCategoriaModalLabel"
    aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-group">
                    <form  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">

                            <h5 class="modal-title text-center" id="frmCategoriaLabel">Cadastrar Sub - Categoria</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Categoria Principal</label>
                                <select name="id_categoria" class="form-control" id="exampleFormControlSelect1">
                                  @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nm_categoria}}</option>

                                  @endforeach
                                </select>
                              </div>
                            <label for="nm_sub_cat">Sub - Categoria</label>
                            <input id="nm_sub_cat" type="text" placeholder="Informe a Sub - categoria"
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        </div>
        <div class="col-md-6">
            <h4>Lista de Categorias</h4>

            @if(!empty($mensagem))
            <div class="alert alert-success">
                <p class="text-center"> {{ $mensagem }}</p>
            </div>
            @endif
            <ul class="list-group">

                @foreach ($categorias as $categoria)
                <li class="list-group-item"> {{$categoria->nm_categoria}}</li>
                    @if(!empty($categoria->subCategorias))
                        <ul>
                        @foreach ( $categoria->subCategorias as $subcategoria)
                            <li>{{$subcategoria->nm_sub_cat}}</li>
                        @endforeach
                        </ul>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>





@endsection
