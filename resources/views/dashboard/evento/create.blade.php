<div class="modal fade" id="frmNomeAberturaEventoModal" tabindex="-1" role="dialog"
     aria-labelledby="frmNomeAberturaEventoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="frmNomeAberturaEvento" method="POST" action="/dashboard/evento/">
                
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <h2 class="modal-title" id="frmContatoModalLabel">Dados do Evento</h2>
                    <input id="id_usuario" name="id_usuario" type="hidden" value="{{ Auth::user()->id }}"/>
                    <div class="form-group row d-flex justify-content-center">
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
                                                    <label for="dt_evento">Data do Evento</label>
                                                    <input id="dt_evento" type="date"
                                                              class="form-control form-control-sm {{ $errors->has('dt_evento') ? 'is-invalid' : '' }}"
                                                              name="dt_evento"/>
                                                    @if ($errors->has('dt_evento'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('dt_evento') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="tm_evento">Horario do Evento</label>
                                                    <input id="tm_evento" type="text" data-mask="00:00"
                                                              class="form-control form-control-sm {{ $errors->has('tm_evento') ? 'is-invalid' : '' }}"
                                                              name="ds_tema_evento" placeholder="00:00"/>
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
                                                    <select id="id_pais"
                                                           class="form-control form-control-sm select-find {{ $errors->has('id_pais') ? 'is-invalid' : '' }}"
                                                           name="id_pais" style="width: 100%">
                                                        <option></option>
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
