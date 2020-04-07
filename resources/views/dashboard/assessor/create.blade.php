<div class="modal fade" id="frmAssessorModal" tabindex="-1" role="dialog" aria-labelledby="frmAssessorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmAssessorModalLabel">Cadastrar Assessor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="frmAssessor" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <label for="nm_acessor">Nome Assessor(a)</label>
                            <input id="nm_acessor" type="text" class="form-control form-control-sm" name="nm_acessor"
                                value="" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                    <button type="reset" class="btn btn-warning">
                        Limpar
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  </form>
          </div>
        </div>
    </div>
</div>
