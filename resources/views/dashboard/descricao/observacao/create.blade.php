<div class="modal fade" id="frmObservacaoModal" tabindex="-1" role="dialog" aria-labelledby="frmEquipamentoModalLabel"
    aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmEquipamentoModalLabel">
                    Cadastrar Observações
                </h5>
            </div>
            <form method="POST" id="frmObs">
                @csrf
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                   <label for="txtTinyMCE">Cadastrar Observações*</label>
                                <textarea class="form-control" id="txtTinyMCE" name="descricao"
                                          rows="4" required>{{ $data != NULL ? $data : '' }}</textarea>
                            </div>
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
