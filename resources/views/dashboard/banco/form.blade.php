<div class="x_panel">
    <div class="x_title">
        <h2>Cadastrar Agência bancária</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a data-toggle="modal" data-target="#modalNomesBancos"><i class="fa fa-gears"></i></a>
            </li>
            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: none">
        <form method="POST" action="/dashboard/banco/agencia" enctype="multipart/form-data">
            @csrf
            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-12">
                    <label for="cd_banco">Codigo Banco</label>
                    <input id="cd_banco" type="text"
                           class="form-control form-control-sm{{ $errors->has('cd_banco') ? ' is-invalid' : '' }}"
                           name="cd_banco" value="{{ old('cd_banco') }}" required autofocus
                           autocomplete="off"/>
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-12">
                    <label for="nm_banco">Codigo Banco</label>
                    <input id="nm_banco" type="text"
                           class="form-control form-control-sm{{ $errors->has('nm_banco') ? ' is-invalid' : '' }}"
                           name="nm_banco" value="{{ old('nm_banco') }}" required autofocus
                           autocomplete="off"/>
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
