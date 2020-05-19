<<<<<<< HEAD
@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="form-check form-check-inline">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#frmPalestranteModal">Adicionar Contato
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="frmPalestranteModal" tabindex="-1" role="dialog"
         aria-labelledby="frmPalestranteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xlg" role="document">
            <div class="modal-content">
                <form method="POST" action="/palestrante" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Palestrante</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                           href="#nav-pessoais" role="tab" aria-controls="nav-home"
                                           aria-selected="true">Dados Pessoais</a>

                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                           href="#nav-contrato" role="tab" aria-controls="nav-profile"
                                           aria-selected="false">Dados Contratuais</a>

                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                           href="#nav-acessor" role="tab" aria-controls="nav-contact"
                                           aria-selected="false">Acessor</a>

                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                           href="#nav-descricao" role="tab" aria-controls="nav-contact"
                                           aria-selected="false">Descrição</a>

                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                           href="#nav-categoria" role="tab" aria-controls="nav-contact"
                                           aria-selected="false">Categoria</a>

                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                           href="#nav-video" role="tab" aria-controls="nav-contact"
                                           aria-selected="false">Video</a>
                                    </div>
                                </nav>
                                <div class="tab-content p-2" id="nav-tabContent">

                                    <div class="tab-pane fade show active" id="nav-pessoais" role="tabpanel"
                                         aria-labelledby="nav-pessoais-tab">
                                        <div class="form-group row d-flex justify-content-center">
                                            <div class="col-md-12">
                                                <label for="Nome">Nome do Palestrante</label>
                                                <input id="nome" type="text"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex justify-content-center">
                                            <div class="col-md-4">
                                                <label for="Nome">Foto</label>
                                                <input id="nome" type="file"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Nome">Nacionalidade</label>
                                                <input id="nome" type="text"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Nome">Sexo</label>
                                                <input id="nome" type="text"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex justify-content-center">
                                            <div class="col-md-12">
                                                <label for="Nome">Idiomas</label>
                                                <input id="nome" type="text"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex justify-content-center">
                                            <div class="col-md-4">
                                                <label for="Nome">Disponivel para Palestras</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                           name="inlineRadioOptions" id="inlineRadio1"
                                                           value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Sim</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                           name="inlineRadioOptions" id="inlineRadio2"
                                                           value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Não</label>
                                                </div>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Nome">Visivel no site</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                           name="inlineRadioOptions" id="inlineRadio1"
                                                           value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Sim</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                           name="inlineRadioOptions" id="inlineRadio2"
                                                           value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Não</label>
                                                </div>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                                @endif
                                            </div>

                                            <div class="col-md-4">
                                                <label for="Nome">Rancking do Palestrante</label><br>
                                                <div class="rate">
                                                    <input type="radio" id="star5" name="rate" value="5"/>
                                                    <label for="star5" title="text">5 stars</label>
                                                    <input type="radio" id="star4" name="rate" value="4"/>
                                                    <label for="star4" title="text">4 stars</label>
                                                    <input type="radio" id="star3" name="rate" value="3"/>
                                                    <label for="star3" title="text">3 stars</label>
                                                    <input type="radio" id="star2" name="rate" value="2"/>
                                                    <label for="star2" title="text">2 stars</label>
                                                    <input type="radio" id="star1" name="rate" value="1"/>
                                                    <label for="star1" title="text">1 star</label>
                                                </div>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row d-flex justify-content-center">
                                            <div class="col-md-2">
                                                <div class="form-check form-check-inline">
                                                    <button type="button" class="btn btn-primary"
                                                            data-toggle="modal" data-target="#frmContatoModal">
                                                        Adicionar Contato
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
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

                                    <div class="tab-pane fade" id="nav-contrato" role="tabpanel"
                                         aria-labelledby="nav-profile-tab">

                                        <div class="form-group row d-flex justify-content-center">
                                            <div class="col-md-12">
                                                <label for="Nome">Razão Social</label>
                                                <input id="nome" type="text"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex justify-content-center">
                                            <div class="col-md-4">
                                                <label for="Nome">CNPJ</label>
                                                <input id="nome" type="text"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nome') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Nome">Inscrição Estadual</label>
                                                <input id="nome" type="text"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nome') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Nome">Inscrição Municipal</label>
                                                <input id="nome" type="text"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nome') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row d-flex justify-content-center">
                                            <div class="col-md-4">
                                                <label for="Nome">CNPJ</label>
                                                <input id="nome" type="text"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nome') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Nome">Inscrição Estadual</label>
                                                <input id="nome" type="text"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nome') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Nome">Inscrição Municipal</label>
                                                <input id="nome" type="text"
                                                       class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                       name="nome" value="" required autofocus>

                                                @if ($errors->has('nome'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nome') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                         aria-labelledby="nav-contact-tab">...
                                    </div>
                                </div>
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

    <div class="modal fade" id="frmContatoModal" tabindex="-1" role="dialog" aria-labelledby="frmContatoModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Contato</h5>
=======
<div class="modal fade" id="frmNomePalestranteModal" tabindex="-1" role="dialog"
     aria-labelledby="frmNomePalestranteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="frmNomePalestrante" method="POST" action="/dashboard/fragmentopalestrante">
                <input id="ds_ativo" type="hidden" name="ds_ativo" value="n"/>
                <input id="ds_ativo" type="hidden" name="ds_visivel_site" value="n"/>
                <input id="id_usuario" type="hidden" name="id_usuario" value="{{ Auth::user()->id }}"/>
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Palestrante</h5>
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
<<<<<<< HEAD
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
=======
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-md-12">
                                    <label for="nome_palestrante">Nome do Palestrante*</label>
                                    <input id="nome_palestrante" type="text" class="form-control form-control-sm"
                                           name="nm_palestrante" value="" autofocus required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Salvar
                    </button>
                    <button type="reset" class="btn btn-warning btn-sm text-white">
                        <i class="fa fa-eraser"></i> Limpar
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                        <i class="fa fa-close"></i> Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
