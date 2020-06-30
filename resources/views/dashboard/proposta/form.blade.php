@extends('layouts.dashboard')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
            @if($action == "criar")
                    <h3>Cadastrar Proposta</h3>
                @else
                    <h3>Editar Proposta</h3>
                @endIf
            </div>
            <div class="title_center ">
                <h3 style='color:red'>Nrº  {{$data->num_proposta}}</h3>
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
                    <form method="POST" action="/dashboard/proposta"
                          id="proposta"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="x_content">
                            <div class="col-md-12 col-sm-12">
                                <input id="id_usuario" type="hidden" name="id_usuario"
                                       value="{{ Auth::user()->id }}"/>
                                    
                                <div class="col-md-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-gerais-tab"
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
                                                    <input id="id_proposta" type="hidden" name="id_proposta" value="{{$data->id}}"/>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="nm_contratante">Cliente Final</label>
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
                                                                        <h4 class="panel-title">{{$data->nm_solicitante}}</h4>
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
                                                                <div class="form-group row d-flex justify-content-center">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <label for="contatos">Contatos</label>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <button type="button" class="btn btn-primary btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#frmContatoModal">
                                                                        <i class="fa fa-plus"></i> Contato
                                                                    </button>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <table id="tblContato"
                                                                           class="table table-sm table-striped">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col">Tipo de Contato</th>
                                                                            <th scope="col">Contato</th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @if(sizeof($data->contatos) > 0)
                                                                            @foreach($data->contatos as $contato)
                                                                                <tr id="{{$contato->id}}">
                                                                                    <td>{{$contato->tiposContato->nm_tipo_contato}}</td>
                                                                                    <td>{{$contato->ds_contato}}</td>
                                                                                    <td class='text-right'>
                                                                                        <button
                                                                                            id='excluirContato-{{$contato->id}}'
                                                                                            type='button'
                                                                                            class='btn btn-danger btn-sm'
                                                                                            data-id="{{$contato->id}}"
                                                                                            data-toggle='modal'
                                                                                            data-target='#frmRemoverContatoModal'>
                                                                                            <i
                                                                                                class='fa fa-trash'></i>
                                                                                        </button>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @else
                                                                            <tr id="contato-null">
                                                                                <td colspan="3" class="text-center">
                                                                                    Nenhum
                                                                                    contato
                                                                                    registrado
                                                                                </td>
                                                                            </tr>
                                                                        @endif
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
                                        </div>
                                        <div class="tab-pane fade" id="nav-evento" role="tabpanel"
                                             aria-labelledby="nav-evento-tab">
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <label for="nm_evento">Nome do Evento</label>
                                                    <input id="nm_evento" type="text"
                                                           class="form-control form-control-sm {{ $errors->has('nm_evento') ? 'is-invalid' : '' }}"
                                                           name="nm_evento"/>
                                                    @if ($errors->has('nm_evento'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('nm_evento') }}</strong>
                                                        </span>
                                                    @endif                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="tema_evento">Tema do Evento</label>
                                                    <textarea id="tema_evento" type="text"
                                                              class="form-control form-control-sm {{ $errors->has('tema_evento') ? 'is-invalid' : '' }}"
                                                              name="tema_evento">
                                                    </textarea>
                                                    @if ($errors->has('tema_evento'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('tema_evento') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="tema_palestras">Tema das Palestras</label>
                                                    <textarea id="tema_palestras" type="text"
                                                              class="form-control form-control-sm {{ $errors->has('tema_palestras') ? 'is-invalid' : '' }}"
                                                              name="tema_palestras">
                                                    </textarea>
                                                    @if ($errors->has('tema_palestras'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('tema_palestras') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-4">
                                                    <label for="dt_evento_inicio">Data do Evento</label>
                                                    <input id="dt_evento_inicio" type="date"
                                                              class="form-control form-control-sm {{ $errors->has('dt_evento_inicio') ? 'is-invalid' : '' }}"
                                                              name="dt_evento_inicio"/>
                                                    @if ($errors->has('dt_evento_inicio'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('dt_evento_inicio') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="tm_evento">Horario do Evento</label>
                                                    <input id="tm_evento" type="text" data-mask="00:00"
                                                              class="form-control form-control-sm {{ $errors->has('tm_evento') ? 'is-invalid' : '' }}"
                                                              name="tm_evento" placeholder="00:00"/>
                                                    @if ($errors->has('tm_evento'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('tm_evento') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="tm_duracao">Duração do evento</label>
                                                    <input id="tm_duracao" type="text" data-mask="00:00"
                                                              class="form-control form-control-sm {{ $errors->has('tm_duracao') ? 'is-invalid' : '' }}"
                                                              name="tm_duracao" placeholder="00:00"/>
                                                    @if ($errors->has('tm_duracao'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('tm_duracao') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-4">
                                                    <label for="id_pais">País</label>
                                                    @php
                                                        $paises = App\Pais::all();
                                                    @endphp   
                                                    <select id="id_pais"
                                                           class="form-control form-control-sm select-find {{ $errors->has('id_pais') ? 'is-invalid' : '' }}"
                                                           name="id_pais" style="width: 100%">
                                                           
                                                        <option></option>
                                                        @foreach ($paises as $pais)
                                                            <option value="{{$pais->id}}">
                                                                {{$pais->nm_pais}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_pais'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('id_pais') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="id_estado">Estado</label>
                                                    <select id="id_estado"
                                                           class="form-control form-control-sm select-find {{ $errors->has('id_estado') ? 'is-invalid' : '' }}"
                                                           name="id_estado" style="width: 100%">
                                                        <option></option>
                                                    </select>
                                                    @if ($errors->has('id_estado'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('id_estado') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="id_cidade">Cidade</label>
                                                    <select id="id_cidade"
                                                            class="form-control form-control-sm select-find {{ $errors->has('id_cidade') ? 'is-invalid' : '' }}"
                                                            name="id_cidade" style="width: 100%">
                                                        <option></option>
                                                    </select>
                                                    @if ($errors->has('id_cidade'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('id_cidade') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-4">
                                                    <label for="nm_local">Local do Evento</label>
                                                    <input id="nm_local" type="text"
                                                           class="form-control form-control-sm {{ $errors->has('nm_local') ? 'is-invalid' : '' }}"
                                                           name="nm_local" />
                                                    @if ($errors->has('nm_local'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('nm_local') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="nr_partic">Número Participantes</label>
                                                    <input id="nr_partic" type="number"
                                                           class="form-control form-control-sm {{ $errors->has('nr_partic') ? 'is-invalid' : '' }}"
                                                           name="nr_partic"/>
                                                    @if ($errors->has('nr_partic'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('nr_partic') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="nr_verba">Verba Disponivél</label>
                                                    <input id="nr_verba" type="text"
                                                           class="form-control form-control-sm {{ $errors->has('nr_verba') ? 'is-invalid' : '' }}"
                                                           name="nr_verba"/>
                                                    @if ($errors->has('nr_verba'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('nr_verba') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="id_publico_perfil">Perfil do Público</label>
                                                    <select id="id_publico_perfil"
                                                            class="form-control form-control-sm select-find {{ $errors->has('id_publico_perfil') ? 'is-invalid' : '' }}"
                                                            name="id_publico_perfil" style="width: 100%">
                                                        <option></option>
                                                    </select>
                                                    @if ($errors->has('id_publico_perfil'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('id_publico_perfil') }}</strong>
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
    @include("dashboard.proposta.create")
    @include('dashboard.contato.create')
    @include('dashboard.endereco.create')
    @include('dashboard.descricao.form')

    @include('dashboard.contato.remover')
    @include('dashboard.endereco.remover')
    @include('dashboard.descricao.remover')
@endsection


