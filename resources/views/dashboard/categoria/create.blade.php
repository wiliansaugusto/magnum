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
</div>

<div class="modal fade" id="frmCategoriaModal" tabindex="-1" role="dialog" aria-labelledby="frmCategoriaModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xlg" role="document">
        <div class="modal-content">
            <form method="POST" action="/categoria" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>

                    </button>
                </div>
                <div class="modal-body">

                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label for="nm_categoria">Nome da categoria</label>
                            <input id="nm_categoria" type="text"
                                class="form-control form-control-sm{{ $errors->has('nm_categoria') ? ' is-invalid' : '' }}"
                                name="nm_categoria" value="" required autofocus>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-sm table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tipo de Contato</th>
                                        <th scope="col">Contato</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
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
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
