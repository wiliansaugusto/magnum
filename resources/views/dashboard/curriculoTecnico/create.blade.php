<div class="modal fade" id="frmCurriculoTecModal" tabindex="-1" role="dialog" aria-labelledby="frmCurriculoTecModalLabel"
    aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmCurriculoTecModalLabel">
                    Cadastrar Currículo Tecnico
                </h5>
            </div>

            <form method="post" id="frmCurriculoTec">
                @csrf

                <div class="modal-body text-center">
                    <div class="form-group">
                        <label for="ds_curriculo_tecnico">Cadastro do Currículo Técnico</label>
                        <textarea class="form-control" id="ds_curriculo_tecnico" name="ds_curriculo_tecnico"  rows="4" required></textarea>
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







