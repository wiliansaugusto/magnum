<div class="x_panel">
    <div class="x_title">
        <h2>Cadastrar Usuário</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a data-toggle="modal" data-target="#modalUsuarios"><i class="fa fa-gears"></i></a>
            </li>
            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: none">
        <form method="POST" action="{{ url('dashboard/register') }}" aria-label="{{ __('Register') }}" autocomplete="off">
            @csrf
            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-12">
                    <label for="name">{{ __('Nome do Usuário') }}</label>
                    <input id="name" type="text" class="form-control form-control-sm{{ $errors->has('nm_usuario') ? ' is-invalid' : '' }}"
                           name="nm_usuario" value="{{ old('nm_usuario') }}" required autofocus autocomplete="off"/>

                    @if ($errors->has('nm_usuario'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nm_usuario') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-12">
                    <label for="email">{{ __('E-mail') }}</label>
                    <input id="email" type="email" class="form-control form-control-sm{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" required />

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-12">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password"
                           class="form-control form-control-sm{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password"
                           required autocomplete="off"/>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
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
