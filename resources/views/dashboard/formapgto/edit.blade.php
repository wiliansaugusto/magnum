<div class="modal fade" id="modalFormaPgtoUpdate{{$formaPgto->id}}" tabindex="-1" role="dialog"
     aria-labelledby="FormaPgto{{$formaPgto->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="POST"
                  action="/dashboard/formapgto/edit/{{$formaPgto->id}}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="FormaPgto{{$formaPgto->id}}">
                        Alterar Forma de Pagamento
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <h2 class="text-uppercase" style="font-weight: bold">{{$formaPgto->ds_campo}}</h2>
                    <p>Os valores relacionados a essa forma de pagamento serão alterados</p>
                    <input id="ds_campo" type="text"
                           class="form-control form-control-sm{{ $errors->has('$formaPgto->ds_campo') ? ' is-invalid' : '' }}"
                           name="ds_campo" value="{{ old('$formaPgto->ds_campo') }}" required autofocus
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
