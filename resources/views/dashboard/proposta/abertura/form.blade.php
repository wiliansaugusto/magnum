@extends('layouts.dashboard')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Abertura de Proposta</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    @if ($errors->any())
                        <div class="alert alert-danger text-white">
                            Campos inseridos incorretamente ou em branco
                        </div>
                    @endif
                    <form method="POST" action="/dashboard/proposta/abertura"
                          id="palestrante"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="x_content">
                            <div class="col-md-12 col-sm-12">
                                <input id="id_usuario" type="hidden" name="id_usuario"
                                       value="{{ Auth::user()->id }}"/>
                                <div class="col-md-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-evento-tab"
                                               data-toggle="tab"
                                               href="#nav-gerais" role="tab" aria-controls="nav-gerais"
                                               aria-selected="true">Dados Gerais</a>

                                            <a class="nav-item nav-link" id="nav-evento-tab"
                                               data-toggle="tab"
                                               href="#nav-evento" role="tab" aria-controls="nav-evento"
                                               aria-selected="false">Dados do Evento</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content p-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-gerais"
                                             role="tabpanel"
                                             aria-labelledby="nav-gerais-tab">
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <label for="nm_contratante">Contratante</label>
                                                    <input id="nm_contratante" type="text"
                                                           class="form-control form-control-sm {{$errors->has('nm_contratante') ? 'is-invalid' : '' }}"
                                                           name="nm_contratante"
                                                           value="{{old('nm_contratante') }}"/>
                                                    @if ($errors->has('nm_contratante'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$errors->first('nm_contratante')}}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center mt-2">
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#frmSolicitanteModal"
                                                            style="width: 100%">
                                                        <i class="fa fa-plus"></i> Solicitante
                                                    </button>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="accordion" id="accordion-solicitante" role="tablist"
                                                         aria-multiselectable="true">
                                                        <div class="panel" id="painel-proposta">
                                                            <div class="panel-heading">
                                                                <div class="col-md-11 mt-1">
                                                                    <a role="tab" id="heading"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion-solicitante"
                                                                       href="#collapseProposta"
                                                                       aria-expanded="true"
                                                                       aria-controls="collapseProposta">
                                                                        <h4 class="panel-title">Diego de Lima Lopes</h4>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <button id='excluirProposta' type='button'
                                                                            class='btn btn-danger btn-sm'
                                                                            data-id=""
                                                                            data-toggle='modal'
                                                                            data-target='#frmRemoverPropostaModal'>
                                                                        <i class='fa fa-trash'></i>
                                                                    </button>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div id="collapseProposta"
                                                                 class="panel-collapse collapse in" role="tabpanel"
                                                                 aria-labelledby="heading">
                                                                <div class="panel-body p-3">
                                                                    <table id="proposta-contato-null"
                                                                           class="table table-sm table-striped">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Tipo de Contato</th>
                                                                            <th>Contato</th>
                                                                            <th></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr id="contato">
                                                                            <td>Telefone</td>
                                                                            <td>13974236026</td>
                                                                            <td class='text-right'>
                                                                                <button id='excluirContato'
                                                                                        type='button'
                                                                                        class='btn btn-danger btn-sm'
                                                                                        data-id=""
                                                                                        data-toggle='modal'
                                                                                        data-target='#frmRemoverContatoModal'>
                                                                                    <i class='fa fa-trash'></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-evento" role="tabpanel"
                                         aria-labelledby="nav-evento-tab">
                                        <div class="form-group row d-flex justify-content-center">
                                            <div class="col-md-12">
                                                <label for="nm_razao_social">Razão Social</label>
                                                <input id="nm_razao_social" type="text"
                                                       class="form-control form-control-sm {{ $errors->has('nm_razao_social') ? 'is-invalid' : '' }}"
                                                       name="nm_razao_social"
                                                       value=""/>
                                                @if ($errors->has('nm_razao_social'))
                                                    <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('nm_razao_social') }}</strong>
                                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-right">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-save"></i> Salvar
                                        </button>
                                        <a href="/dashboard/proposta" class="btn btn-danger btn-sm">
                                            <i class="fa fa-close"></i> Cancelar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection


