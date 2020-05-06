<div class="modal fade" id="frmCategoriaModal" tabindex="-1" role="dialog" aria-labelledby="frmCategoriaModalLabel"
     aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" action="categoria/">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="modal-header">
                            <h5 class="modal-title" id="frmCategoriaLabel">Cadastrar Categoria</h5>
                        </div>
                        <div class="modal-body text-left">
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-md-12">
                                    <label for="nm_categoria">Categoria</label>
                                    <input id="nm_categoria" type="text" placeholder="Informe a categoria"
                                           class="form-control form-control-sm{{ $errors->has('nm_categoria') ? ' is-invalid' : '' }}"
                                           name="nm_categoria" value="" required autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Salvar
                    </button>
                    <button type="reset" class="btn btn-warning btn-sm text-white">
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
