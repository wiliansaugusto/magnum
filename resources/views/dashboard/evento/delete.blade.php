<div class="modal fade" id="modalEventoDel{{$evento->id}}" tabindex="-1" role="dialog"
     aria-labelledby="EventoDel{{$evento->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="post"
                  action="/dashboard/evento/{{$evento->id}}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="EventoDel{{$evento->id}}">
                        Excluir Evento
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <p>Tem certeza que você quer excluir o evento:</p>
                    <h2 class="text-uppercase" style="font-weight: bold">{{$evento->id_evento}} | {{$evento->nm_evento}}</h2>
                    <p>Todas as informações serão excluidas definitivamente</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-trash"></i> Excluir
                    </button>
                    <button type="button" class="btn btn-danger btn-sm"
                            data-dismiss="modal">
                        <i class="fa fa-close"></i> Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
