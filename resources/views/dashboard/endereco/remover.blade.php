<div class="modal fade" id="frmRemoverEnderecoModal" tabindex="-1" role="dialog"
aria-labelledby="frmRemoverEnderecoModalLabel"    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmRemoverEnderecoModalLabel">Remover Endereço</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" id="frmRemoverEndereco">
                @csrf
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12 text-center">
                            <div id="msg-exEndereco" class="alert alert-danger" role="alert" style="display: none">
                                Não foi possível excluir o endereço cadastrado!
                            </div>
                            <input id="id_endereco" type="hidden" name="id" />
                            <h6>Deseja remover o endereço!</h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Sim
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                </div>
            </form>
        </div>
    </div>
</div>