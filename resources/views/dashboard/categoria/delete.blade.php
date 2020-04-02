<div class="modal fade" id="modalDel{{$categoria->id}}" tabindex="-1" role="dialog"
     aria-labelledby="LabelAlt{{$categoria->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="post"
                  action="categoria/{{$categoria->id}}">
                @csrf
                @method('DELETE')
                <div class="modal-body text-left">
                    <div class="form-group">
                        <div class="modal-header">
                            <h5 class="modal-title" id="LabelAlt{{$categoria->id}}">
                                Excluir Categoria
                            </h5>
                        </div>
                        <div class="modal-body text-center">
                            <h5>Tem certeza que você quer excluir a categoria:</h5>
                            <h2 class="text-uppercase">{{$categoria->nm_categoria}}</h2>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Excluir
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