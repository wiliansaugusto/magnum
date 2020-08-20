<div class="modal fade" id="modalEquipamentoUpdate{{$equipamento->id}}" tabindex="-1" role="dialog"
     aria-labelledby="FormaPgto{{$equipamento->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="POST"
                  action="/dashboard/formapgto/edit/{{$equipamento->id}}">
                @csrf
                
                <div class="modal-header">
                    <h5 class="modal-title" id="FormaPgto{{$equipamento->id}}">
                        Alterar Equipamentos Padrão
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <h2 class="text-uppercase" style="font-weight: bold">{{$equipamento->ds_campo}}</h2>
                    <p>Os valores relacionados a esses equipamentos serão alterados</p>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <label for="name">{{ __('Equipamentos Padrão') }}</label>
                            <input type="text" name="tp_campo" value="equipamentos" hidden>
                            <textarea class="form-control form-control-sm{{ $errors->has('ds_campo') ? ' is-invalid' : '' }}"
                                    name="ds_campo" id="name" cols="30" rows="4" value="{{ old('ds_campo') }}" required
                                    autofocus
                                    autocomplete="off"></textarea>
                            @if ($errors->has('ds_campo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ds_campo') }}</strong>
                                </span>
                            @endif
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
