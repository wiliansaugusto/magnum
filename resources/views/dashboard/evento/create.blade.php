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
                            <div class="col-md-12">
                                <label for="nm_evento">Nome do Evento</label>
                                    <input id="nm_evento" type="text"
                                                class="form-control form-control-sm {{ $errors->has('nm_evento') ? 'is-invalid' : '' }}"
                                                name="nm_evento">
                                    </input>
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
                                <label for="tema_palestra">Tema do Palestra</label>
                                <textarea id="tema_palestra" type="text"
                                            class="form-control form-control-sm {{ $errors->has('tema_palestra') ? 'is-invalid' : '' }}"
                                            name="tema_palestra">
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
                                            name="dt_evento_inicio"/>
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
                                            name="dt_evento_fim"/>
                                @if ($errors->has('dt_evento_fim'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dt_evento_fim') }}</strong>
                                    </span>
                                @endif
                            </div>                           
                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                            <div class="col-md-4">
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
