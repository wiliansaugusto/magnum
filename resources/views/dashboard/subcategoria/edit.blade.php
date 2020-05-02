<div class="modal fade" id="modal{{$subItem->id}}" tabindex="-1" role="dialog" aria-labelledby="Label{{$subItem->id}}"
    aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" action="categoria/update/{{$subItem->id}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Label{{$subItem->id}}">
                                Alterar Sub - Categoria
                            </h5>
                        </div>
                        <div class="modal-body text-left">
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$subItem->id}}"><br>
                                <label for="nm_sub_cat">Subcategoria</label>
                                <input id="nm_sub_cat" type="text" placeholder="Informe a Subcategoria"
                                    class="form-control form-control-sm{{ $errors->has('nm_sub_cat') ? ' is-invalid' : '' }}"
                                    name="nm_sub_cat" value="{{$subItem->nm_sub_cat}}" required autofocus>
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
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
