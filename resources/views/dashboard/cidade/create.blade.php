<div class="x_panel">
    <div class="x_title">
        <h2>Cadastrar Cidades</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a data-toggle="modal" data-target="#modalCidades"><i class="fa fa-gears"></i></a>
            </li>
            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: none">

        <form method="POST" action="{{ url('dashboard/cidade') }}" aria-label="{{ __('Register') }}"
              autocomplete="off">
            @csrf
            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="id_pais_cidade">Pais</label>
                    <select id="id_pais_cidade" name="id_pais" class="form-control form-control-sm select-find" required style="width: 100%">
                        <option></option>
                        @php
                            $paises = App\Pais::all();
                        @endphp
                        @foreach ( $paises as $pais)
                            <option value="{{$pais->id}}">{{$pais->nm_pais}}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('id_pais'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('id_pais') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="id_estado_cidade">Estado</label>
                    <select id="id_estado_cidade" name="id_estado" class="form-control form-control-sm select-find" required style="width: 100%">
                        <option></option>
                    </select>

                    @if ($errors->has('id_estado'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('id_estado') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-12">
                    <label for="nm_cidade">{{ __('Cidades') }}</label>
                    <input id="nm_cidade" type="text"
                           class="form-control form-control-sm{{ $errors->has('nm_cidade') ? ' is-invalid' : '' }}"
                           name="nm_cidade" value="{{ old('nm_cidade') }}" required autofocus
                           autocomplete="off"/>

                    @if ($errors->has('nm_cidade'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nm_cidade') }}</strong>
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
