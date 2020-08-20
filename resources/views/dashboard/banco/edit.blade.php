<div class="modal fade" id="modalNomeBancoUpdate{{$banco->id}}" tabindex="-1" role="dialog"
     aria-labelledby="TipoUpdate{{$banco->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="POST"
                  action="/dashboard/banco/edit/{{$banco->id}}">
                @csrf
                
                <div class="modal-header">
                    <h5 class="modal-title" id="NomeBancoUpdate{{$banco->id}}">
                        Alterar Agência Bancária
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <h2 class="text-uppercase" style="font-weight: bold">{{$banco->cd_banco}} -
                        {{ $banco->nm_banco}}</h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 text-left mt-2">
                        
                            <label id="cd_banco">Código do Banco</label>
                            <input id="cd_banco" type="text"
                                class="form-control form-control-sm{{ $errors->has('$banco->cd_banco') ? ' is-invalid' : '' }}"
                                name="cd_banco" value="{{ old('$banco->cd_banco') }}" required autofocus
                                autocomplete="off"/>        
                        </div>
                        <div class="col-md-8 col-sm-12 text-left mt-2">
                            
                            <label id="nm_banco">Nome do Banco</label>
                            <input id="nm_banco" type="text"
                                class="form-control form-control-sm{{ $errors->has('$banco->nm_banco') ? ' is-invalid' : '' }}"
                                name="nm_banco" value="{{ old('$banco->nm_banco') }}" required autofocus
                                autocomplete="off"/>
                        </div>
                    </div>
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
