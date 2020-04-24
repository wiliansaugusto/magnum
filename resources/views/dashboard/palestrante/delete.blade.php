<div class="modal fade" id="modalPalestranteDel{{$palestrante->id}}" tabindex="-1" role="dialog"
     aria-labelledby="PalestranteDel{{$palestrante->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="post"
                  action="/dashboard/palestrante/{{$palestrante->id}}">
                @csrf
                @method('DELETE')
                <div class="modal-body text-left">
                    <div class="form-group">
                        <div class="modal-header">
                            <h5 class="modal-title" id="PalestranteDel{{$palestrante->id}}">
                                Excluir Palestrante
                            </h5>
                        </div>
                        <div class="modal-body text-center">
                            <h5>Tem certeza que você quer excluir o palestrante:</h5>
                            <h2 class="text-uppercase">{{$palestrante->nm_palestrante}}</h2>
                            <h5>Todas as informações serão excluidas definitivamente</h5>

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
