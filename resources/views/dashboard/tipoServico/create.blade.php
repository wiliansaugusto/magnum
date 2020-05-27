<div class="x_panel">
    <div class="x_title">
        <h2>Cadastrar Tipos de Serviços</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a data-toggle="modal" data-target="#modalTipoServicos"><i class="fa fa-gears"></i></a>
            </li>
            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: none">
        <form method="POST" action="{{ url('dashboard/createTpServ') }}" aria-label="{{ __('Register') }}"
              autocomplete="off">
            @csrf
            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-12">
                    <label for="name">{{ __('Tipo de Serviço') }}</label>
                    <input id="name" type="text"
                           class="form-control form-control-sm{{ $errors->has('nm_tipo_servico') ? ' is-invalid' : '' }}"
                           name="nm_tipo_servico" value="{{ old('nm_tipo_servico') }}" required autofocus
                           autocomplete="off"/>

                    @if ($errors->has('nm_tipo_servico'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nm_tipo_servico') }}</strong>
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
