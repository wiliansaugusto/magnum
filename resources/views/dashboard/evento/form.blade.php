@extends('layouts.dashboard')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Eventos</h3>
            </div>
            <div class="title_center ">
                <h3 style='color:red'>Nrº  {{$data->id}}</h3>
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
                    <form method="POST" action="/dashboard/evento"
                          id="evento"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="x_content">
                            <div class="col-md-12 col-sm-12">
                                <input id="id_usuario" type="hidden" name="id_usuario"
                                       value="{{ Auth::user()->id }}"/>
                                <div class="col-md-12">
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                <label for="nm_evento">Nome do Evento</label>
                                                    <input id="nm_evento" type="text"
                                                              class="form-control form-control-sm {{ $errors->has('nm_evento') ? 'is-invalid' : '' }}"
                                                              name="nm_evento" value="{{$data->nm_evento}}">
                                                    </input>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="tema_evento">Tema do Evento</label>
                                                    <textarea id="tema_evento" type="text"
                                                              class="form-control form-control-sm {{ $errors->has('tema_evento') ? 'is-invalid' : '' }}"
                                                              name="tema_evento" > {{$data->tema_evento}}
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
                                                              name="tema_palestra" > {{$data->tema_palestra}}
                                                    </textarea>
                                                    @if ($errors->has('tema_palestra'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('tema_palestra') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                            <div class="col-md-6">
                                <label for="dt_evento_inicio">Data Inicio do Evento</label>
                                <input id="dt_evento_inicio" type="date"
                                            class="form-control form-control-sm {{ $errors->has('dt_evento_inicio') ? 'is-invalid' : '' }}"
                                            name="dt_evento_inicio" value="{{$data->dt_evento_inicio}}"/>
                                @if ($errors->has('dt_evento_inicio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dt_evento_inicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="dt_evento_fim">Data Fim do Evento</label>
                                <input id="dt_evento_fim" type="date"
                                            class="form-control form-control-sm {{ $errors->has('dt_evento_fim') ? 'is-invalid' : '' }}"
                                            name="dt_evento_fim" value="{{$data->dt_evento_fim}}"/>
                                @if ($errors->has('dt_evento_fim'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dt_evento_fim') }}</strong>
                                    </span>
                                @endif
                            </div>                           
                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            </div>
                            <div class="col-md-6">
                                <label for="tm_evento">Horario do Evento</label>
                                <input id="tm_evento" type="text" data-mask="00:00"
                                            class="form-control form-control-sm {{ $errors->has('tm_evento') ? 'is-invalid' : '' }}"
                                            name="tm_evento" />
                                @if ($errors->has('tm_evento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tm_evento') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="tm_duracao">Duração do evento</label>
                                <input id="tm_duracao" type="text" data-mask="00:00"
                                            class="form-control form-control-sm {{ $errors->has('tm_duracao') ? 'is-invalid' : '' }}"
                                            name="tm_duracao" />
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

                                                    <select id="id_pais" name="id_pais" class="form-control form-control-sm select-find"
                                                            style="width: 100%" required>
                                                        <option></option>
                                                        @foreach ($paises as $pais)
                                                            <option value="{{$pais->id}}">
                                                                {{$pais->nm_pais}}
                                                            </option>
                                                        @endforeach
                                                    </select>
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
                                    
                                    <div class="ln_solid"></div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 text-right">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-save"></i> Salvar
                                            </button>
                                            <a href="/dashboard/evento" class="btn btn-danger btn-sm">
                                                <i class="fa fa-close"></i> Cancelar
                                            </a>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include("dashboard.evento.create")
@endsection


