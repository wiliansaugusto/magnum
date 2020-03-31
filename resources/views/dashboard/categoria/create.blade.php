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
        <div class="col-md-6">
            <h4>Lista de Categorias</h4>

            @if(!empty($mensagem))
            <div class="alert alert-success">
                <p class="text-center"> {{ $mensagem }}</p>
            </div>
            @endif
            <ul class="list-group">

                @foreach ($categoria as $item)
                <li class="list-group-item"> {{$item->nm_categoria}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>





@endsection
