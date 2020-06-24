<div class="x_panel">
    <div class="x_title">
        <h2>Cadastrar Estados</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a data-toggle="modal" data-target="#modalEstados"><i class="fa fa-gears"></i></a>
            </li>
            <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content" style="display: none">

        <form method="POST" action="{{ url('dashboard/estado') }}" aria-label="{{ __('Register') }}"
              autocomplete="off">
            @csrf
            <div class="form-group row d-flex justify-content-center">
                <div class="col-md-6">
                    <label for="nm_estado">{{ __('Estados') }}</label>
                    <input id="nm_estado" type="text"
                           class="form-control form-control-sm{{ $errors->has('nm_estado') ? ' is-invalid' : '' }}"
                           name="nm_estado" value="{{ old('nm_estado') }}" required autofocus
                           autocomplete="off"/>

                    @if ($errors->has('nm_estado'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nm_estado') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="ds_sg_estado">{{ __('Sigla Estados') }}</label>
                    <input id="ds_sg_estado" type="text"
                           class="form-control form-control-sm{{ $errors->has('ds_sg_estado') ? ' is-invalid' : '' }}"
                           name="ds_sg_estado" value="{{ old('ds_sg_estado') }}"  autofocus
                           autocomplete="off"/>

                    @if ($errors->has('ds_sg_estado'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ds_sg_estado') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="id_pais">Pais</label>
                    <select id="id_pais_cad_estado" name="id_pais" class="form-control form-control-sm select-find" style="width: 100%">
                        <option selected disabled>Selecione o Pais</option>
                        @php
                            $paises = App\Pais::all();
                        @endphp
                        @foreach ( $paises as $pais)
                            <option value="{{$pais->id}}">{{$pais->nm_pais }}</option>
                        @endforeach
                    </select>
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
