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
                <div class="col-md-6">
                    <label for="id_estado">Tipo Contato</label>
                    <select id="id_estado" name="id_estado" class="form-control form-control-sm" required>
                        <option selected disabled>Selecione o Estado</option>
                        @php
                            $estados = App\Estado::all();
                        @endphp
                        @foreach ( $estados as $estado)
                            <option value="{{$estado->id}}">{{$estado->nm_estado }}</option>
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
