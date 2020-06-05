<div class="modal fade" id="frmDescricaoModal" tabindex="-1" role="dialog" aria-labelledby="frmDescricaomodalLabel"
     aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="tituloDescricaoModal" class="modal-title" id="frmDescricaomodalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="frmDescricao">
                @csrf
                <input type="hidden" id="tipo_descricao" name="tipo_descricao" value=""/>
                <div class="modal-body">
                    <div id="msg-error-descricao" class="alert alert-danger" role="alert" style="display: none">
                        Não foi possível cadastrar a descrição!
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="text-editor" class="form-group">
                                <textarea class="form-control editor" name="descricao"
                                    rows="4"></textarea>
                            </div>
                        </div>
                        <div id="chrCont" class="col-md-12" style="display: none;">
                            <p id="cont-char" class="text-right">Caracteres Restantes: <span>300</span></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Salvar
                    </button>
                    <button id="ds_reset" type="reset" class="btn btn-warning text-white btn-sm">
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
