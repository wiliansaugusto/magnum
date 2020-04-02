@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header ">
        <div class="row justify-content-center">
            <div class="col-md-6 sm-12 text-left">
                <h3>Palestrante</h3>
            </div>
            <div class="col-md-6 sm-12 text-right">
                <div class="form-check form-check-inline">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#frmNomePalestranteModal"><i class="fas fa-plus "></i> Adicionar Palestrante
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">

<p>falta o include de contato na create</p>

    </div>
    <div class="card-footer text-muted text-center">
        Rodapé do card
    </div>
</div>



@endsection
@include('dashboard.palestrante.create')
