<div class="modal fade" id="modalDel{{$categoria->id}}" tabindex="-1" role="dialog"
     aria-labelledby="LabelAlt{{$categoria->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <form method="post"
                  action="categoria/{{$categoria->id}}">
                @csrf
                @method('DELETE')
                <div class="modal-body text-left" style="color:black;">
                    <div class="form-group">
                        <div class="modal-header">
                            <h5 class="modal-title" id="LabelAlt{{$categoria->id}}">
                                Excluir Categoria
                            </h5>
                        </div>
                        <div class="modal-body text-center">
                            <h5>Tem certeza que você quer excluir a categoria:</h5>
                            <h2 class="text-uppercase" style="font-weight: bold">{{$categoria->nm_categoria}}</h2>
                            <h5>Todas as Subcategorias vinculadas serão excluidas</h5>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-check"></i> Sim
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                            <i class="fa fa-close"></i> Não
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
