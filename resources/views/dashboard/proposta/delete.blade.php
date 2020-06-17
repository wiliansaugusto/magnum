<div class="modal fade" id="modalPropostaDel{{$proposta->id}}" tabindex="-1" role="dialog"
     aria-labelledby="PropostaDel{{$proposta->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="post"
                  action="/dashboard/proposta/{{$proposta->id}}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="PropostaDel{{$proposta->id}}">
                        Excluir Proposta
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <p>Tem certeza que você quer excluir a proposta:</p>
                    <h2 class="text-uppercase" style="font-weight: bold">{{$proposta->num_proposta}} | {{$proposta->nm_solicitante}}</h2>
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
