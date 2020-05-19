<div class="modal fade" id="frmRemoverContatoModal" tabindex="-1" role="dialog"
aria-labelledby="frmRemoverContatoModalLabel"    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmRemoverContatoModalLabel">Remover Contato</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" id="frmRemoverContato">
                @csrf
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12 text-center">
                            <div id="msg-exBanco" class="alert alert-danger" role="alert" style="display: none">
                                Não foi possível excluir o contato cadastrado!
                            </div>
                            <input id="id_contato" type="hidden" name="id" />
                            <h6>Deseja remover o contato!</h6>
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