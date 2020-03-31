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




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            </div>
            <div class="col-md-12">

                @if(!empty($mensagem))
                <div class="alert alert-success">
                    <p class="text-center"> {{ $mensagem }}</p>
                </div>
                @endif

                <table class="table table-bordered">


                    @foreach ($categoria as $item)
                    <thead class="thead-dark">
                    <th colspan="3">Categoria - {{$item->nm_categoria}}</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$item->nm_categoria}}</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#{{$item->nm_categoria}}">Adicionar Sub-Categoria
                                    </button>
                                    <div class="modal fade" id="{{$item->nm_categoria}}" tabindex="-1" role="dialog"
                                        aria-labelledby="{{$item->nm_categoria}}Label" aria-hidden="true">
                                        <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <form method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-header">

                                                                <h5 class="modal-title text-center"
                                                                    id="frmCategoriaLabel">Cadastrar Sub - Categoria
                                                                </h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Categoria
                                                                        Principal</label>
                                                                    <input type="hidden" name="id_categoria"
                                                                        value="{{$item->id}}">
                                                                    <label for="">{{$item->nm_categoria}}</label>

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
                            </td>
                            <td>excluir</td>
                        </tr>

                    </tbody>
                    @php
                    $r = App\Categoria::find($item->id)->subCategorias;
                    @endphp
                    <thead>

                        <th>Sub - Categoria</th>
                        <th>Alterar Sub - Categoria</th>
                        <th>Excluir Sub - Categoria</th>

                    </thead>
                    @if (($r)!==null)
                    @foreach ($r as $subItem)
                    <tbody>
                        <tr>
                            <td>{{$item->nm_categoria}} -
                                {{$subItem->nm_sub_cat }}</td>
                            <td>alterar</td>
                            <td>Excluir</td>
                        </tr>
                    </tbody>

                    @endforeach
                    @else
                    <li class="list-group-item">Sem sub - categorias Cadastradas</li>
                    @endif
                    @endforeach
                </table>




            </div>
        </div>
    </div>





    @endsection
