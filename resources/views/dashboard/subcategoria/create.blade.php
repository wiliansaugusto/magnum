<div class="modal fade" id="modalSub{{$categoria->id}}" tabindex="-1" role="dialog"
     aria-labelledby="Label{{$categoria->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-left">
                    <div class="form-group">
                        <div class="modal-header">
                            <h5 class="modal-title text-center"
                                id="Label{{$categoria->id}}">
                                Cadastrar Subcategoria
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Categoria
                                    Principal: {{$categoria->nm_categoria}} </label>
                                <input type="hidden" name="id_categoria"
                                       value="{{$categoria->id}}">
                            </div>
                            <div class="form-group">
                                <label for="nm_sub_cat">Sub - Categoria</label>
                                <input id="nm_sub_cat" type="text"
                                       placeholder="Informe a Sub - categoria"
                                       class="form-control form-control-sm{{ $errors->has('nm_sub_cat') ? ' is-invalid' : '' }}"
                                       name="nm_sub_cat" value="" required autofocus>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                    <button type="reset" class="btn btn-warning text-white">
                        Limpar
                    </button>
                    <button type="button" class="btn btn-danger"
                            data-dismiss="modal">Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
