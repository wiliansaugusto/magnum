<div class="modal fade" id="modalNomeBancoDel{{$banco->id}}" tabindex="-1" role="dialog"
     aria-labelledby="TipoDel{{$banco->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="POST"
                  action="/dashboard/banco/agencia/{{$banco->id}}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="NomeBancoDel{{$banco->id}}">
                        Excluir Agência Bancária
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <p>Tem certeza que você quer excluir o Banco:</p>
                    <h2 class="text-uppercase" style="font-weight: bold">{{$banco->cd_banco}} -
                        {{ $banco->nm_banco}}</h2>

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
