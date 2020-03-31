@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>Categorias</h3>
        <div class="col-md-12">
        </div>
        <div class="col-md-8 form-group">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nm_categoria">Categoria Principal</label>
                <input id="nm_categoria" type="text" placeholder="Informe a categoria"
                    class="form-control form-control-sm{{ $errors->has('nm_categoria') ? ' is-invalid' : '' }}"
                    name="nm_categoria" value="" required autofocus> <br>
                <div class="row justify-content-center form-group">

                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                    <button type="reset" class="btn btn-warning">
                        Limpar
                    </button>
                </div><br>
            </form>
        </div>

    </div>
    <div class="row justify-content-center">
        <hr>
        <h4>Lista de Categorias</h4>
        <div class="col-md-12">
            @if(!empty($mensagem))
            <div class="alert alert-success">
                {{ $mensagem }}
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
