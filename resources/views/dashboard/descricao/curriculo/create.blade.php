<div class="modal fade" id="frmCurriculoModal" tabindex="-1" role="dialog" aria-labelledby="frmCurriculoModalLabel"
    aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmCurriculoModalLabel">
                    Cadastrar Curriculo Resumido
                </h5>
            </div>
            <form method="POST" id="frmCurriculo">
                @csrf
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ds_curriculo">Cadastro do Curriculo Resumido</label>
                                <textarea class="form-control" name="ds_curriculo" id="ds_curriculo"
                                    rows="4"></textarea>
                            </div>
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
