<div class="modal fade" id="modalTipoAcessorDel{{$acessor->id}}" tabindex="-1" role="dialog"
     aria-labelledby="TipoDel{{$acessor->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="POST"
                  action="/dashboard/tipoacessor/{{$acessor->id}}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="TipoDel{{$acessor->id}}">
                        Excluir Tipo de Assessor
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <p>Tem certeza que você quer excluir o tipo de Assesor:</p>
                    <h2 class="text-uppercase" style="font-weight: bold">{{$acessor->nm_tp_acessor}}</h2>
                    <p>Todos os valores relacionados a esse tipo de assessor serão apagados</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-check"></i> Sim
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                        <i class="fa fa-close"></i> Não
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
