<div class="modal fade" id="modalTipoAcessorUpdate{{$acessor->id}}" tabindex="-1" role="dialog"
     aria-labelledby="TipoUpdate{{$acessor->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="POST"
                  action="/dashboard/tipoacessor/edit/{{$acessor->id}}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="TipoUpdate{{$acessor->id}}">
                        Alterar Tipo de Assessor
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <h2 class="text-uppercase" style="font-weight: bold">{{$acessor->nm_tp_acessor}}</h2>
                    <p>OS os valores relacionados a esse tipo de assessor serão Aletrados</p>
                    <input id="nm_tp_acessor" type="text"
                           class="form-control form-control-sm{{ $errors->has('$acessor->nm_tp_acessor') ? ' is-invalid' : '' }}"
                           name="nm_tp_acessor" value="{{ old('$acessor->nm_tp_acessor') }}" required autofocus
                           autocomplete="off"/>
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
