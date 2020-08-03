<div class="x_panel">
    <div class="x_title">
        <h2>Cadastrar Equipamentos Padrao</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a data-toggle="modal" data-target="#modalEquipamentos"><i class="fa fa-gears"></i></a>
            </li>
            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: none">
        <form method="POST" action="{{ url('dashboard/createequipamentos') }}" aria-label="{{ __('Register') }}"
              autocomplete="off">
            @csrf
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
            <div class="ln_solid"></div>
            <div class="item form-group text-right">
                <div class="col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Salvar</button>
                    <button class="btn btn-warning text-white btn-sm" type="reset"><i class="fa fa-eraser"></i> Limpar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
