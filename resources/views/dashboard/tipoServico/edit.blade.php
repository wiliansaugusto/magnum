<div class="modal fade" id="modalTipoServicoUpdate{{$tipo->id}}" tabindex="-1" role="dialog"
     aria-labelledby="TipoUpdate{{$tipo->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="POST"
                  action="/dashboard/tipoServico/edit/{{$tipo->id}}">
                @csrf
                
                <div class="modal-header">
                    <h5 class="modal-title" id="TipoUpdate{{$tipo->id}}">
                        Alterar Tipo de Serviço
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <h2 class="text-uppercase" style="font-weight: bold">{{$tipo->nm_tipo_servico}}</h2>
                    <p>Os valores relacionados a esse tipo de serviço serão alterados</p>
                    <input id="nm_tipo_servico" type="text"
                           class="form-control form-control-sm{{ $errors->has('$tipo->nm_tipo_servico') ? ' is-invalid' : '' }}"
                           name="nm_tipo_servico" value="{{ old('$tipo->nm_tipo_servico') }}" required autofocus
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
