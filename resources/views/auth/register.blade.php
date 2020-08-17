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
        <form method="POST" action="{{ url('dashboard/register') }}" aria-label="{{ __('Register') }}"
              enctype="multipart/form-data" autocomplete>
            @csrf
            
            <div class="form-group row d-flex align-content-right">
                <div id="crop-avatar">
                    <img id="imgFoto" class="img-responsive avatar-view"
                         src="{{ asset('img/no-image.png')}}"
                         alt="Avatar" title="Change the avatar" style="width: 30%">
                </div>
                <div class="col-md-4 col-sm-4 text-left mt-2">
                    <input id="ds_foto" type="file"
                           class="form-control form-control-sm inputFoto"
                           name="ds_foto"/>
                    <label for="ds_foto" class="custom-upload-foto"
                           style="width: 100%;word-break: break-all;">
                        <i class="fa fa-cloud-upload"></i> Carregar foto
                    </label>
                    <p id="file_invalid" class="alert alert-error mt-3"
                       style="display: none;">
                        Formato
                        de arquivo invalido! <br/>
                        Aceito apenas imagens nos formatos .png, .jpeg, .jpg
                    </p>
                </div>
            </div>
            <div class="form-group row d-flex justify-content-top">
                <div class="col-md-8">
                    <label for="name">{{ __('Nome do Usuário') }}</label>
                    <input id="name" type="text"
                           class="form-control form-control-sm{{ $errors->has('nm_usuario') ? ' is-invalid' : '' }}"
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
                    <input id="email" type="email"
                           class="form-control form-control-sm{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" required/>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
            <div class="form-group row d-flex align-content-right">
                <div class="col-md-12">
                    <label for="tipo_contato_usuario">Tipo Contato</label>
                    <select id="tipo_contato_usuario" name="id_tp_contato"
                            class="form-control form-control-sm">
                        <option selected disabled>Selecione Tipo de Contato</option>
                        @php
                            $tipoContato = new App\TipoContato();
                            $result = $tipoContato::all();
                        @endphp
                        @foreach ( $result as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->nm_tipo_contato}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row d-flex align-content-right">
                <div id="nr_contatoUsuario" class="col-md-12">
                    <label for="contatoUsuario">Contato</label>
                    <input id="contatoUsuario" type="text"
                           class="form-control form-control-sm"
                           name="ds_contato" value="" required
                           autofocus/>
                    <input type="hidden" name="id_usuario" id="id_usuario" value="{{Auth::user()->id}}">
                </div>
            </div>
            <div class="form-group row d-flex align-content-right">
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
