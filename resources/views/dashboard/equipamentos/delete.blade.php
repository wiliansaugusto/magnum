<div class="modal fade" id="modalEquipamentoDel{{$equipamento->id}}" tabindex="-1" role="dialog"
     aria-labelledby="FormaPgto{{$equipamento->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="POST"
                  action="/dashboard/formapgto/{{$equipamento->id}}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="FormaPgto{{$equipamento->id}}">
                        Excluir Forma de Pagamento
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <p>Tem certeza que você quer excluir a Forma de Pagamento:</p>
                    <h2 class="text-uppercase" style="font-weight: bold">{{$equipamento->ds_campo}}</h2>
                    <p>Todos os valores relacionados a esse tipo de serviço serão apagados</p>
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
