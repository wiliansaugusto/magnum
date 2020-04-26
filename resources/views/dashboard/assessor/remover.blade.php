<div class="modal fade" id="frmRemoverAssessorModal" tabindex="-1" role="dialog"
aria-labelledby="frmRemoverAssessorModalLabel"    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmRemoverAssessorModalLabel">Remover Banco</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" id="frmRemoverAssessor">
                @csrf
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12 text-center">
                            <div id="msg-exAssessor" class="alert alert-danger" role="alert" style="display: none">
                                Não foi possível excluir o Assessor cadastrado!
                            </div>
                            <input id="id_assessor" type="hidden" name="id" />
                            <h6>Deseja remover os dados do Assessor!</h6>
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
