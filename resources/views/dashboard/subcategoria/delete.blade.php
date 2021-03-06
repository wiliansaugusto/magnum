<div class="modal fade" id="modalSubDel{{$subItem->id}}" tabindex="-1" role="dialog"
     aria-labelledby="LabelAlt{{$subItem->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="post"
                  action="categoria/{{$subItem->id}}">
                @csrf
                @method('DELETE')
                <div class="modal-body text-left" style="color:black;">
                    <div class="form-group">
                        <div class="modal-header">
                            <input type="hidden" name="sub" value="1">
                            <h5 class="modal-title" id="LabelAlt{{$subItem->id}}">
                                Excluir Categoria
                            </h5>
                        </div>
                        <div class="modal-body text-center" >
                            <h5 >Tem certeza que você quer excluir a categoria:</h5>
                            <h2 class="text-uppercase" style="font-weight: bold; ">{{$subItem->nm_sub_cat}}</h2>
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
