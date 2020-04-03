<div class="modal fade" id="frmContatoModal" tabindex="-1" role="dialog" aria-labelledby="frmContatoModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" action="/palestrante" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Contato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-8">
                            <label for="nome_palestrante">Contato</label>
                            <input id="nome_palestrante" type="text"
                                   class="form-control form-control-sm{{ $errors->has('nome_palestrante') ? ' is-invalid' : '' }}"
                                   name="nome_palestrante" value="" required
                                   autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="tipo_contato">Tipo Contato</label>
                            <select id="tipo_contato" name="id_tp_contato" class="form-control form-control-sm">
                                <option selected disabled>Selecione Tipo de Contato</option>
                                <option value="1">Telefone</option>
                            </select>
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
            </form>
        </div>
    </div>
</div>
