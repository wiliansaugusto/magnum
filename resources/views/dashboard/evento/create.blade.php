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
                    <h3 class="modal-title" id="frmContatoModalLabel">Dados do Evento</h3>
                    <input id="id_usuario" name="id_usuario" value="{{ Auth::user()->id }}"/>
                    <input id="nm_evento" type="text" name="nm_evento" />
                    <input id="tema_Evento" type="text" name="tema_evento" />

                </div>
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-md-12">
                                    <label for="nome_solicitante">Nome do Solicitante</label>
                                    <input id="nome_solicitante" type="text" class="form-control form-control-sm"
                                           name="nm_solicitante" autofocus required>
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
