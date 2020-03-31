@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Categorias</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome Campanha</th>
                                <!-- <th>Ações</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($campanhas as $campanha)
                                <tr>
                                    <td>{{ $campanha->id }}</td>
                                    <td>{{ $campanha->nome }}</td>
                                    <!-- <td>
                                        <a href="{{ $campanha->id }}" class="btn btn-primary">
                                            Editar
                                        </a>

                                        <a href="{{ $campanha->id }}" class="btn btn-danger">
                                            Excluir
                                        </a>
                                    </td> -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
