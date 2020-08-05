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

                                               <a class="nav-item nav-link" id="nav-propostaItem-tab"
                                               data-toggle="tab"
                                               href="#nav-propostaItem" role="tab" aria-controls="nav-propostaItem"
                                               aria-selected="false">Itens da Proposta</a>

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
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <label for="status_propostatxt">Status Proposta &nbsp</label>
                                                    <label for="status_proposta">
                                                    @switch ($data->status_proposta)
                                                        @case(1)
                                                            <span><strong>Aberta</strong></span>
                                                            @break
                                                        @case(2)
                                                            <span>Em Andamento</strong></span>
                                                            @break
                                                        @case(3)
                                                            <span>Aguardando Retorno</strong></span>
                                                            @break
                                                        @case(4)
                                                            <span>Aprovada</strong></span>
                                                            @break
                                                        @default
                                                            <span>Reprovada</strong></span>
                                                    @endswitch
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <div class="col-md-12 ">&nbsp&nbsp
                                                    <input type="radio" name="status_proposta" value="1">Aberta &nbsp&nbsp
                                                    <input type="radio" name="status_proposta" value="2">Em Andamento &nbsp&nbsp
                                                    <input type="radio" name="status_proposta" value="3">Aguardando Retorno &nbsp&nbsp
                                                    <input type="radio" name="status_proposta" value="4">Aprovada &nbsp&nbsp
                                                    <input type="radio" name="status_proposta" value="5">Reprovada
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <label for="nm_contratante">Contratante</label>
                                                    <input id="nm_contratante" type="text"
                                                           class="form-control form-control-sm {{$errors->has('nm_contratante') ? 'is-invalid' : '' }}"
                                                           name="nm_contratante"
                                                           value="{{ $data->nm_contratante }}"/>
                                                    @if ($errors->has('nm_contratante'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{$errors->first('nm_contratante')}}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-2">
                                                    <div class="form-check form-check-inline">
                                                        <button type="button"
                                                                class="btn btn-primary btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#frmSolicitanteModal">
                                                            <i class="fa fa-plus"></i> Solicitante
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="accordion" id="accordion-solicitante"
                                                            role="tablist" aria-multiselectable="true">
                                                            @if (sizeof($data->solicitante) > 0)
                                                            @foreach($data->solicitantes as $solicitante)
                                                                @php
                                                                    $solicitanteContatos = App\Contato::where('id_solicitante', $solicitante->id)->get();
                                                                    $tipoContato = App\TipoContato::find($solicitante->id_tp_contato);
                                                                @endphp
                                                        <div class="panel" id="painel-solicitante-{{$solicitante->id}}">
                                                            <div class="panel-heading">
                                                                <div class="col-md-11 mt-1">
                                                                    <a role="tab"
                                                                        id="heading-{{$solicitante->id}}"
                                                                        data-toggle="collapse"
                                                                        data-parent="#accordion-solicitante"
                                                                        href="#collapseSolicitante-{{$solicitante->id}}"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseSolicitante-{{$solicitante->id}}">
                                                                        <h4 class="panel-title">{{$solicitante->nm_solicitante}} - {{$tipoContato == null ? 'Não Informado':$tipoContato->nm_tp_solicitante}} </h4>
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <button id='excluirSolicitante'
                                                                        type='button'
                                                                        class='btn btn-danger btn-sm'
                                                                        data-id="{{$solicitante->id}}"
                                                                        data-toggle='modal'
                                                                        data-target='#frmRemoverSolicitanteModal'>
                                                                        <i class='fa fa-trash'></i>
                                                                    </button>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div
                                                                id="collapseSolicitante-{{$solicitante->id}}"
                                                                class="panel-collapse collapse in"
                                                                role="tabpanel"
                                                                aria-labelledby="heading-{{$solicitante->id}}">
                                                                <div class="panel-body p-3">
                                                                    <table
                                                                        id="solicitante-contato-null"
                                                                        class="table table-sm table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Tipo de Contato </th>
                                                                                <th>Contato</th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @if(sizeof($solicitanteContatos) > 0)
                                                                                @foreach($solicitanteContatos as $contato)
                                                                                    <tr id="contato-{{$contato->id}}">
                                                                                        <td>{{$contato->tiposContato->nm_tipo_contato}}</td>
                                                                                        <td>{{$contato->ds_contato}}</td>
                                                                                        <td class='text-right'>
                                                                                            <button
                                                                                                id='excluirContato'
                                                                                                type='button'
                                                                                                class='btn btn-danger btn-sm'
                                                                                                data-id="{{$contato->id}}"
                                                                                                data-toggle='modal'
                                                                                                data-target='#frmRemoverContatoModal'>
                                                                                                <i class='fa fa-trash'></i>
                                                                                            </button>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            @else
                                                                                <tr id="contato-assesssor-null">
                                                                                    <td colspan="3"
                                                                                        class="text-center">
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
                                                        @endforeach
                                                    @else
                                                        <table class="table table-sm table-striped"
                                                                id="tblSolicitante">
                                                            <tr id="solicitante-null">
                                                                <td colspan="2" class="text-center">
                                                                    Nenhum
                                                                    solicitante
                                                                    registrado
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12" >
                                                    <label for='mensagem_proposta'>Mensagem Proposta</label>
                                                    <textarea class="form-control form-control-sm">{{$data->mensagem_proposta}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-8">
                                                    <label for='obs_proposta'>Obeservação</label>
                                                    <input id='obs_proposta' class="form-control form-control-sm" type='text' name='obs_proposta' value='{{$data->obs_proposta}}'/>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for='vlr_total_proposta'>Total R$</label>
                                                    <input id='vlr_total_proposta' class="form-control form-control-sm" type='text' name='vlr_total_proposta' value='{{$data->vlr_total_proposta}}'/>
                                                </div>
                                            </div>

                                    </div>
                                        <div class="tab-pane fade" id="nav-evento" role="tabpanel"
                                             aria-labelledby="nav-evento-tab">
                                            <div class="form-group row d-flex justify-content-center">
                                               <div class="col-md-12">
                                                    <label for="id_evento">ID Evento</label>
                                                    <input id="id_evento" type="text"
                                                           class="form-control form-control-sm {{ $errors->has('nm_evento') ? 'is-invalid' : '' }}"
                                                           name="id_evento" value="{{ $data->id }}"/>
                                                </div>
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
                                                    <label for="tema_palestra">Tema das Palestras</label>
                                                    <textarea id="tema_palestra" type="text"
                                                              class="form-control form-control-sm {{ $errors->has('tema_palestra') ? 'is-invalid' : '' }}"
                                                              name="tema_palestra">
                                                    </textarea>
                                                    @if ($errors->has('tema_palestras'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('tema_palestra') }}</strong>
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
                                                <div class="col-md-12">
                                                <label for="obs_data_evento">Observação data</label>
                                                    <textarea id="obs_data_evento" type="text"
                                                              class="form-control form-control-sm {{ $errors->has('obs_data_evento') ? 'is-invalid' : '' }}"
                                                              name="obs_data_evento">
                                                    </textarea>
                                                    @if ($errors->has('obs_data_evento'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('obs_data_evento') }}</strong>
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
                                                    <input id="nr_partic" type="number" data-mask="###.000"
                                                           class="form-control form-control-sm {{ $errors->has('nr_partic') ? 'is-invalid' : '' }}"
                                                           name="nr_partic"/>
                                                    @if ($errors->has('nr_partic'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('nr_partic') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="vlr_verba_evento">Verba Disponivél</label>
                                                    <input id="vlr_verba_evento" type="text" class="form-control form-control-sm {{ $errors->has('vlr_verba_evento') ? 'is-invalid' : '' }}"
                                                           name="vlr_verba_evento"/>
                                                    @if ($errors->has('vlr_verba_evento'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('vlr_verba_evento') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                <label for="id_pais">Perfil Publico</label>
                                                    @php
                                                        $perfilpublicos = App\PerfilPublico::all();
                                                    @endphp
                                                    <select id="id_perfilpublico"
                                                           class="form-control form-control-sm select-find {{ $errors->has('id_perfilpublico') ? 'is-invalid' : '' }}"
                                                           name="id_perfilpublico" style="width: 100%">

                                                        <option></option>
                                                        @foreach ($perfilpublicos as $perfilpublico)
                                                            <option value="{{$perfilpublico->id}}">
                                                                {{$perfilpublico->nm_perfil_publico}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('id_perfilpublico'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('id_perfilpublico') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <textarea class="col-md-12">{{$data}}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show active" id="nav-propostaItem"
                                             role="tabpanel"
                                             aria-labelledby="nav-propostaItem-tab">
                                             <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-2">
                                                    <div class="form-check form-check-inline">
                                                        <button type="button"
                                                                class="btn btn-primary btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#frmItemPropostaModal">
                                                            <i class="fa fa-plus"></i> Item Proposta
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="accordion" id="accordion-itemProposta"
                                                            role="tablist" aria-multiselectable="true">

                                                        <table class="table table-sm table-striped"
                                                                id="tblItemProposta">
                                                            <tr id="itemProposta-null">
                                                                <td colspan="2" class="text-center">
                                                                    Nenhum
                                                                    Item
                                                                    registrado
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
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
    @include('dashboard.solicitante.create')

    @include('dashboard.contato.remover')
    @include('dashboard.endereco.remover')
    @include('dashboard.descricao.remover')
    @include('dashboard.solicitante.remover')
@endsection


