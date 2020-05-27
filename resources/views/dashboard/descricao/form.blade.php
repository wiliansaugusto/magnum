<div class="modal fade" id="frmDescricaoModal" tabindex="-1" role="dialog" aria-labelledby="frmDescricaomodalLabel"
     aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmDescricaomodalLabel">
                    Cadastrar Chamada
                </h5>
            </div>
            <form method="POST" id="frmDescricao">
                @csrf
                <input type="hidden" name="tpDescricao" value=""/>
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label id="lblDescricao"  for="decricao"></label>
                                <textarea class="form-control" name="descricao"
                                    rows="4"></textarea>
                            </div>
                        </div>
                        <div id="chrCont" class="col-md-12">
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
