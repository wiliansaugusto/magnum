<div class="modal fade" id="frmEnderecoModal" tabindex="-1" role="dialog" aria-labelledby="frmEnderecoModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmEnderecoModalLabel">Cadastrar Endereço</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-md-2">
                        <label for="nr_cep">CEP</label>
                        <input id="nr_cep" type="number" class="form-control form-control-sm" name="nr_cep"
                               value="" required autofocus />
                    </div>
                    <div class="col-md-10">
                        <label for="nm_logradouro">Logradouro</label>
                        <input id="nm_logradouro" type="text" class="form-control form-control-sm" name="nm_logradouro"
                               value="" required readonly />
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
            </div>
        </div>
    </div>
</div>
