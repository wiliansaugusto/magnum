<div class="modal fade" id="modalAlt{{$categoria->id}}" tabindex="-1" role="dialog"
     aria-labelledby="LabelAlt{{$categoria->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="POST"
                  action="categoria/update/{{$categoria->id}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-left">
                    <div class="form-group">
                        <div class="modal-header">
                            <h5 class="modal-title" id="LabelAlt{{$categoria->id}}">
                                Alterar Categoria
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">

                                <label>Categoria
                                </label>
                                <input type="hidden" name="id"
                                       value="{{$categoria->id}}">
                                <input id="nm_categoria" type="text"
                                       placeholder="Informe a nova categoria"
                                       class="form-control form-control-sm{{ $errors->has('nm_categoria') ? ' is-invalid' : '' }}"
                                       name="nm_categoria" value="{{$categoria->nm_categoria}}" required
                                       autofocus>
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
                </div>
            </form>
        </div>
    </div>
</div>
