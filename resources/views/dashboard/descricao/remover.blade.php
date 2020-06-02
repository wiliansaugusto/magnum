<div class="modal fade" id="frmRemoverDescricaoModal" tabindex="-1" role="dialog"
     aria-labelledby="frmRemoverDescricaoModalLabel"    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmRemoverDescricaoModalLabel">Remover Descrição</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" id="frmRemoverDescricao">
                @csrf
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12 text-center">
                            <div id="msg-exDescricao" class="alert alert-danger" role="alert" style="display: none">
                                Não foi possível excluir a Descrição selecionada!
                            </div>
                            <input id="rm_tipo_descricao" type="hidden" name="tipo_descricao" />
                            <h6>Deseja remover a Descrição Cadastrada!</h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-check"></i> Sim
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                        <i class="fa fa-close"></i> Não
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
