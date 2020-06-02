<div class="modal fade" id="modalEstadoDel{{$estado->id}}" tabindex="-1" role="dialog"
     aria-labelledby="TipoDel{{$estado->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="POST"
                  action="/dashboard/estado/{{$estado->id}}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="EstadoDel{{$estado->id}}">
                        Excluir Estado
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <p>Tem certeza que você quer excluir o Estado:</p>
                    <h2 class="text-uppercase" style="font-weight: bold">{{$estado->nm_estado}}</h2>
                    <p>As cidades cadastradas a esse estado serão excluidas!</p>
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
