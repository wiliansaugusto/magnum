<div class="modal fade" id="frmChamadaModal" tabindex="-1" role="dialog" aria-labelledby="frmChamadamodalLabel"
     aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmChamadamodalLabel">
                    Cadastrar Chamada
                </h5>
            </div>
            <form method="POST" id="frmChamada">
                @csrf
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ds_chamada">Cadastro de Chamada para o site</label>
                                <textarea class="form-control" name="descricao" id="ds_chamada" maxlength="300"
                                    rows="8"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p id="cont-char" class="text-right">Caracteres Restantes: <span>300</span></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Salvar
                    </button>
                    <button type="reset" class="btn btn-warning text-white btn-sm">
                        <i class="fa fa-eraser"></i> Limpar
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                        <i class="fa fa-close"></i> Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
