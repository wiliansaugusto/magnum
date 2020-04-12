<div class="modal fade" id="frmCurriculoModal" tabindex="-1" role="dialog" aria-labelledby="frmCurriculomodalLabel"
    aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmCurriculomodalLabel">
                    Cadastrar Currículo
                </h5>
            </div>

            <form method="post" id="frmCurriculo">
                @csrf

                <div class="modal-body text-center">
                    <div class="form-group">
                        <label for="txtTinyMCE">Cadastro do Curriculo Resumido</label>
                        <textarea class="form-control" id="txtTinyMCE" name="ds_curriculo"  rows="4" required></textarea>
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
