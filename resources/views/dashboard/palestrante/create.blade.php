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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-md-12">
                                    <label for="nome_palestrante">Nome do Palestrante*</label>
                                    <input id="nome_palestrante" type="text" class="form-control form-control-sm"
                                           name="nm_palestrante" value="" autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Salvar
                    </button>
                    <button type="reset" class="btn btn-warning btn-sm">
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