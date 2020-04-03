<div class="modal fade" id="frmBancoModal" tabindex="-1" role="dialog" aria-labelledby="frmContatoModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmBancoModal
                Label">Cadastrar Dados Bancários</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-md-4">
                        <label for="tipo_contato">Banco</label>
                        <select id="tipo_contato" name="id_tp_contato" class="form-control form-control-sm">
                            <option selected disabled>Selecione Tipo de Contato</option>
                            <option value="1">Santander</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="nome_palestrante">Agencia</label>
                        <input id="nome_palestrante" type="text"
                               class="form-control form-control-sm{{ $errors->has('nome_palestrante') ? ' is-invalid' : '' }}"
                               name="nome_palestrante" value="" required
                               autofocus>
                    </div>
                    <div class="col-md-4">
                        <label for="nome_palestrante">Conta</label>
                        <input id="nome_palestrante" type="text"
                               class="form-control form-control-sm{{ $errors->has('nome_palestrante') ? ' is-invalid' : '' }}"
                               name="nome_palestrante" value="" required
                               autofocus>
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
