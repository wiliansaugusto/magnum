@extends('layouts.dashboard')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Editar Palestrante</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    @if ($errors->any())
                        <div class="alert alert-danger text-white">
                            Campos inseridos incorretamente ou em branco
                        </div>
                    @endif
                    <form method="POST" action="/dashboard/palestrante/update/{{$data->id}}" id="palestrante"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="x_content">
                            <div class="col-md-2 col-sm-2  profile_left">
                                <div class="col-md-12 col-sm-12">
                                    <div id="crop-avatar">
                                        <img id="imgFoto" class="img-responsive avatar-view"
                                             src="{{ $data->ds_foto != "" ? asset('storage/' . $data->ds_foto) : asset('img/no-image.png')}}"
                                             alt="Avatar" title="Change the avatar" style="width: 100%">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 text-center mt-2">
                                    <input id="ds_foto" type="file"
                                           class="form-control form-control-sm inputFoto"
                                           name="ds_foto" value="{{$data->ds_foto}}"/>
                                    <label for="ds_foto" class="custom-upload-foto" style="width: 100%;word-break: break-all;">
                                        <i class="fa fa-cloud-upload"></i> Carregar foto
                                    </label>
                                    <p id="file_invalid" class="alert alert-error mt-3" style="display: none;">Formato
                                        de arquivo invalido! <br/>
                                        Aceito apenas imagens nos formatos .png, .jpeg, .jpg
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 ">
                                <input id="id_palestrante" type="hidden" name="id_palestrante" value="{{$data->id}}"/>
                                <input id="id_usuario" type="hidden" name="id_usuario" value="{{ Auth::user()->id }}"/>
                                <div class="col-md-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-pessoais-tab"
                                               data-toggle="tab"
                                               href="#nav-pessoais" role="tab" aria-controls="nav-pessoais"
                                               aria-selected="true">Dados
                                                Pessoais</a>

                                            <a class="nav-item nav-link" id="nav-contrato-tab" data-toggle="tab"
                                               href="#nav-contrato" role="tab" aria-controls="nav-contrato"
                                               aria-selected="false">Dados
                                                Contratuais</a>

                                            <a class="nav-item nav-link" id="nav-banco-tab" data-toggle="tab"
                                               href="#nav-banco"
                                               role="tab" aria-controls="nav-banco" aria-selected="false">Dados
                                                Bancários</a>

                                            <a class="nav-item nav-link" id="nav-valores-tab" data-toggle="tab"
                                               href="#nav-valores" role="tab" aria-controls="nav-valores"
                                               aria-selected="false">Valores</a>

                                            <a class="nav-item nav-link" id="nav-assessor-tab" data-toggle="tab"
                                               href="#nav-assessor" role="tab" aria-controls="nav-assessor"
                                               aria-selected="false">Assessor</a>

                                            <a class="nav-item nav-link" id="nav-descricao-tab"
                                               data-toggle="tab"
                                               href="#nav-descricao" role="tab" aria-controls="nav-descricao"
                                               aria-selected="false">Descrição</a>

                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                               href="#nav-video" role="tab" aria-controls="nav-contact"
                                               aria-selected="false">Video</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content p-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-pessoais" role="tabpanel"
                                             aria-labelledby="nav-pessoais-tab">
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <label for="nm_palestrante">Nome do
                                                        Palestrante*</label>
                                                    <input id="nm_palestrante" type="text"
                                                           class="form-control form-control-sm "
                                                           name="nm_palestrante" value="{{$data->nm_palestrante }}"
                                                           autofocus/>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-6">
                                                    <label for="ds_nacionalidade">Nacionalidade*</label>
                                                    <select id="ds_nacionalidade" name="ds_nacionalidade"
                                                            class="form-control form-control-sm
                                                            {{ $errors->has('ds_nacionalidade') ? 'is-invalid' : '' }}">
                                                        <option class="form-control form-control-sm"
                                                                {{$data->ds_nacionalidade == "" ? 'selected' : old('ds_nacionalidade') }}
                                                                disabled>
                                                            Selecionar Nacionalidade*
                                                        </option>
                                                        <option class="form-control form-control-sm"
                                                        value="Brasileiro" {{ old('ds_nacionalidade') == 'Brasileiro' ? 'selected' : ''}}>
                                                        Brasileiro
                                                        </option>
                                                        <option class="form-control form-control-sm"
                                                        value="Estrangeiro" {{ old('ds_nacionalidade') == 'Estrangeiro' ? 'selected' : ''}}>
                                                        Estrangeiro
                                                        </option>
                                                    </select>
                                                    @if ($errors->has('ds_nacionalidade'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('ds_nacionalidade') }}</strong>
                                                </span>
                                                @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="ds_sexo">Sexo*</label>
                                                    <select id="ds_sexo" name="ds_sexo"
                                                            class="form-control form-control-sm {{ $errors->has('ds_sexo') ? 'is-invalid' : '' }}">
                                                        <option class="form-control form-control-sm "
                                                                {{$data->ds_sexo == "" ? 'selected' : old('ds_sexo') }}
                                                                disabled>
                                                            Selecionar Sexo
                                                        </option>
                                                        <option class="form-control form-control-sm"
                                                        value="Feminino" {{ old('ds_sexo') == 'Feminino' ? 'selected' : ''}}>
                                                        Feminino
                                                        </option>
                                                        <option class="form-control form-control-sm"
                                                        value="Masculino" {{ old('ds_sexo') == 'Masculino' ? 'selected' : ''}}>
                                                        Masculino
                                                        </option>
                                                    </select>
                                                    @if ($errors->has('ds_sexo'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('ds_sexo') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-4">
                                                    <label>Disponivel para Palestras*</label><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input {{ $errors->has('ds_ativo') ? 'is-invalid' : '' }}" type="radio"
                                                               name="ds_ativo"
                                                               id="ds_ativo1"
                                                               value="s" {{($data->ds_ativo == 's') ? 'checked'  : (old('ds_ativo') == 's') ? 'checked' : ''}}>
                                                        <label class="form-check-label"
                                                               for="ds_ativo1">Sim</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input  {{ $errors->has('ds_ativo') ? 'is-invalid' : '' }}" type="radio"
                                                               name="ds_ativo"
                                                               id="ds_disponivel2"
                                                               value="n" {{($data->ds_ativo == 'n') ? 'checked'  : (old('ds_ativo') == 'n') ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                               for="ds_disponivel2">Não</label>
                                                    </div>
                                                    @if ($errors->has('ds_ativo'))
                                                    <span class="invalid-feedback" role="alert"
                                                          style="display: block;">
                                                        <strong>{{ $errors->first('ds_ativo') }}</strong>
                                                    </span>
                                                @endif
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Visivel no site*</label><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input {{ $errors->has('ds_visivel_site') ? 'is-invalid' : '' }}" type="radio"
                                                               name="ds_visivel_site"
                                                               id="ds_visivel_site"
                                                               value="s" {{($data->ds_visivel_site == 's') ? 'checked'  : (old('ds_visivel_site') == 's') ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                               for="ds_visivel_site">Sim</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input {{ $errors->has('ds_visivel_site') ? 'is-invalid' : '' }}" type="radio"
                                                               name="ds_visivel_site"
                                                               id="ds_visivel_site2"
                                                               value="n" {{($data->ds_visivel_site == 'n') ? 'checked'  : (old('ds_visivel_site') == 'n') ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                               for="ds_visivel_site2">Não</label>
                                                    </div>
                                                    @if ($errors->has('ds_visivel_site'))
                                                    <span class="invalid-feedback" role="alert"
                                                          style="display: block;">
                                                    <strong>{{ $errors->first('ds_visivel_site') }}</strong>
                                                </span>
                                                @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Ranking do Palestrante*</label><br>
                                                    <div class="rate {{ $errors->has('rank_palestrante') ? 'is-invalid' : '' }}">
                                                        <input type="radio" id="star5" name="rank_palestrante"
                                                        value="5" {{($data->rank_palestrante == '5') ? 'checked'  : (old('rank_palestrante') == '5') ? 'checked' : '' }}>
                                                        <label for="star5" title="text">5
                                                            stars</label>
                                                        <input type="radio" id="star4" name="rank_palestrante"
                                                        value="4" {{($data->rank_palestrante == '4') ? 'checked'  : (old('rank_palestrante') == '4') ? 'checked' : '' }}>
                                                        <label for="star4" title="text">4
                                                            stars</label>
                                                        <input type="radio" id="star3" name="rank_palestrante"
                                                        value="3" {{($data->rank_palestrante == '3') ? 'checked'  : (old('rank_palestrante') == '3') ? 'checked' : '' }}>
                                                        <label for="star3" title="text">3
                                                            stars</label>
                                                        <input type="radio" id="star2" name="rank_palestrante"
                                                        value="2" {{($data->rank_palestrante == '2') ? 'checked'  : (old('rank_palestrante') == '2') ? 'checked' : '' }}>
                                                        <label for="star2" title="text">2
                                                            stars</label>
                                                        <input type="radio" id="star1" name="rank_palestrante"
                                                        value="1" {{($data->rank_palestrante == '1') ? 'checked'  : (old('rank_palestrante') == '1') ? 'checked' : '' }}>

                                                        <label for="star1" title="text">1
                                                            star</label>
                                                    </div>
                                                    @if ($errors->has('rank_palestrante'))
                                                    <div class="col-md-12 mt-0">
                                                        <span class="invalid-feedback" role="alert"
                                                              style="display: block;width: 100%">
                                                            <strong>{{ $errors->first('rank_palestrante') }}</strong>
                                                        </span>
                                                    </div>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    @php
                                                        $idiomas = App\Idiomas::all()->sortBy('ds_idioma');
                                                    @endphp
                                                    <label for="idiomas">Idiomas*</label>
                                                    <select id="idiomas" name="idiomas[]" class="form-control
                                                    form-control-sm select-find {{ $errors->has('idiomas') ? 'is-invalid' : '' }}"
                                                     multiple="multiple"
                                                            style="width: 100%">
                                                        <option></option>
                                                        @foreach ($idiomas as $item)
                                                            @php
                                                                $idiomaPalestrante = App\IdiomasPalestrante::where('id_palestrante', $data->id)
                                                                    ->where('id_idiomas', $item->id)->first();
                                                            @endphp
                                                            @if(old('idiomas') != NULL)
                                                                <option value="{{$item->id}}" {{ in_array($item->id, old('idiomas')) == 'true' ? 'selected' : ''}}>
                                                                    {{$item->ds_idioma}}
                                                                </option>
                                                                @elseif(!empty($idiomaPalestrante))
                                                                <option value="{{$item->id}}"
                                                                        selected="selected">
                                                                    {{$item->ds_idioma}}
                                                                </option>
                                                                @else
                                                                <option value="{{$item->id}}">
                                                                    {{$item->ds_idioma}}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('idiomas'))
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('idiomas') }}</strong>
                                                            </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12">
                                                    <label for="categorias">Categorias*</label>
                                                    @php
                                                        $categorias = App\Categoria::all();
                                                    @endphp
                                                    <select id="categorias" name="categorias[]"
                                                            class="form-control form-control-sm select-find {{ $errors->has('categorias') ? 'is-invalid' : '' }}"
                                                            style="width: 100%" multiple="multiple">
                                                        <option></option>
                                                        @foreach ($categorias as $categoria)
                                                            @php
                                                                $categoriaPalestrante = App\PalestranteCategoria::where('id_palestrante', $data->id)
                                                                    ->where('id_categoria', $categoria->id)->first();
                                                            @endphp
                                                            @if(!empty($categoriaPalestrante))
                                                                <option value="cat-{{$categoria->id}}"
                                                                        selected="selected">
                                                                    {{$categoria->nm_categoria}}
                                                                </option>
                                                            @elseif(old('categorias') != NULL )
                                                            <option value="cat-{{$categoria->id}}" {{ in_array ( "cat-".$categoria->id, old('categorias')) == 'true' ? 'selected' : ''}}>
                                                                {{$categoria->nm_categoria}}
                                                            </option>
                                                            @else
                                                                <option value="cat-{{$categoria->id}}">
                                                                    {{$categoria->nm_categoria}}
                                                                </option>
                                                            @endif
                                                            @foreach ($categoria->subCategorias as $subCategoria)
                                                                @php
                                                                    $subcategoriaPalestrante = App\PalestranteCategoria::where('id_palestrante', $data->id)
                                                                        ->where('id_subcategoria', $subCategoria->id)->first();
                                                                @endphp
                                                                @if(!empty($subcategoriaPalestrante))
                                                                    <option value="sub-{{$subCategoria->id}}"
                                                                            selected="selected">
                                                                        {{$subCategoria->nm_sub_cat}}
                                                                    </option>
                                                                @elseif(old('categorias') != NULL )
                                                                <option value="sub-{{$subCategoria->id}}" {{ in_array ( "sub-".$subCategoria->id, old('categorias')) == 'true' ? 'selected' : ''}}>
                                                                    {{$subCategoria->nm_sub_cat}}
                                                                </option>
                                                                @else
                                                                    <option value="sub-{{$subCategoria->id}}">
                                                                        {{$subCategoria->nm_sub_cat}}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('categorias'))
                                                    <span class="invalid-feedback" role="alert" >
                                                    <strong>{{ $errors->first('categorias') }}</strong>
                                                </span>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12 col-sm-12">
                                                    <label for="contatos">Contatos</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#frmContatoModal">
                                                        <i class="fa fa-plus"></i> Contato
                                                    </button>
                                                </div>
                                                <div class="col-md-10">
                                                    <table id="tblContato" class="table table-sm table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">Tipo de Contato</th>
                                                            <th scope="col">Contato</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if(sizeof($data->contatos) > 0)
                                                            @foreach($data->contatos as $contato)
                                                                <tr id="{{$contato->id}}">
                                                                    <td>{{$contato->tiposContato->nm_tipo_contato}}</td>
                                                                    <td>{{$contato->ds_contato}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirContato-{{$contato->id}}'
                                                                                type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-id="{{$contato->id}}"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverContatoModal'><i
                                                                                    class='fa fa-trash'></i></button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <tr id="contato-null">
                                                                <td colspan="3" class="text-center"> Nenhum contato
                                                                    registrado
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-12 col-sm-12">
                                                    <label for="contatos">Endereços</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#frmEnderecoPalestranteModal">
                                                        <i class="fa fa-plus"></i> Endereço
                                                    </button>
                                                </div>
                                                <div class="col-md-10">
                                                    <table id="tblEnderecoPalestrante"
                                                           class="table table-sm table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">Tipo de Endereço</th>
                                                            <th scope="col">Endereço</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if(sizeof($data->enderecos) > 0)
                                                            @foreach($data->enderecos as $endereco)
                                                                <tr id="{{$endereco->id}}">
                                                                    <td>{{explode(" ",$endereco->tipoEndereco->nm_tipo_endereco)[2]}}</td>
                                                                    <td>{{$endereco->nm_endereco . " " . $endereco->nr_endereco . ", " . $endereco->nm_bairro . ", " . $endereco->nm_cidade ." - ". $endereco->nm_estado . " - " . $endereco->nr_cep}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirEndereco' type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-id="{{$endereco->id}}"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverEnderecoModal'>
                                                                            <i class='fa fa-trash'></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <tr id="endereco-null">
                                                                <td colspan="3" class="text-center"> Nenhum endereço
                                                                    registrado
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contrato" role="tabpanel"
                                             aria-labelledby="nav-profile-tab">
                                            @if(is_object($data->dadosContratuais))
                                                <div class="form-group row d-flex justify-content-center">
                                                    <div class="col-md-12">
                                                        <label for="nm_razao_social">Razão Social*</label>
                                                        <input id="nm_razao_social" type="text"
                                                               class="form-control form-control-sm {{ $errors->has('nm_razao_social') ? 'is-invalid' : '' }}"
                                                               name="nm_razao_social"
                                                               value="{{$data->nm_razao_social == 'is-valid' ? $data->nm_razao_social : (old('nm_razao_social') != NULL)?old('nm_razao_social'):'' }}"/>
                                                                @if ($errors->has('nm_razao_social'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('nm_razao_social') }}</strong>
                                                                </span>
                                                                @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex justify-content-center">
                                                    <div class="col-md-4">
                                                        <label for="cnpj">CNPJ</label>
                                                        <input id="cnpj" type="text"
                                                               class="form-control form-control-sm {{ $errors->has('nr_cnpj') ? 'is-invalid' : '' }}"
                                                               data-mask="00.000.000/0000-00" name="nr_cnpj"
                                                               value="{{$data->nr_cnpj == 'is-valid' ? $data->nr_cnpj : (old('nr_cnpj') != NULL)?old('nr_cnpj'):'' }}"/>
                                                               @if ($errors->has('nr_cnpj'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('nr_cnpj') }}</strong>
                                                                </span>
                                                                @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="insc_estadual">Inscrição Estadual*</label>
                                                        <input id="insc_estadual" type="text"
                                                               class="form-control form-control-sm {{ $errors->has('nr_insc_estadual') ? 'is-invalid' : '' }}"
                                                               name="nr_insc_estadual"
                                                               value="{{$data->nr_insc_estadual == 'is-valid' ? $data->nr_insc_estadual : (old('nr_insc_estadual') != NULL)?old('nr_insc_estadual'):'' }}"/>
                                                            @if ($errors->has('nr_insc_estadual'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('nr_insc_estadual') }}</strong>
                                                            </span>
                                                            @endif
                                                            </div>
                                                    <div class="col-md-4">
                                                        <label for="insc_municipal">Inscrição Municipal*</label>
                                                        <input id="insc_municipal" type="text"
                                                               class="form-control form-control-sm {{ $errors->has('nr_insc_municipal') ? 'is-invalid' : '' }}"
                                                               name="nr_insc_municipal"
                                                               value="{{$data->nr_insc_municipal == 'is-valid' ? $data->nr_insc_municipal : (old('nr_insc_municipal') != NULL)?old('nr_insc_municipal'):'' }}"/>
                                                               @if ($errors->has('nr_insc_municipal'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('nr_insc_municipal') }}</strong>
                                                                </span>
                                                                @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex justify-content-center">
                                                    <div class="col-md-12">
                                                        <label for="nm_completo">Nome Completo*</label>
                                                        <input id="nm_completo" type="text"
                                                               class="form-control form-control-sm {{$errors->has('nm_completo') ? 'is-invalid' : '' }}"
                                                               name="nm_completo"
                                                               value="{{$data->nm_completo == 'is-valid' ? $data->nm_completo : (old('nm_completo') != NULL)?old('nm_completo'):'' }}"/>

                                                        @if ($errors->has('nm_completo'))
                                                        <span class="invalid-feedback" role="alert">
                                                           <strong>{{$errors->first('nm_completo')}}</strong>
                                                           </span>
                                                           @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex justify-content-center">
                                                    <div class="col-md-4">
                                                        <label for="nr_cpf">CPF*</label>
                                                        <input id="nr_cpf" type="text"
                                                               class="form-control form-control-sm {{ $errors->has('nr_cpf') ? 'is-invalid' : '' }}"
                                                               data-mask="000.000.000-00" name="nr_cpf"
                                                               value="{{$data->nr_cpf == 'is-valid' ? $data->nr_cpf : (old('nr_cpf') != NULL)?old('nr_cpf'):'' }}"/>
                                                               @if ($errors->has('nr_cpf'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('nr_cpf') }}</strong>
                                                                </span>
                                                                @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="nr_rg">RG*</label>
                                                        <input id="nr_rg" type="text"
                                                               class="form-control form-control-sm {{ $errors->has('nr_rg') ? 'is-invalid' : '' }}"
                                                               name="nr_rg" data-mask="00.000.000-0"
                                                               value="{{$data->nr_rg == 'is-valid' ? $data->nr_rg : (old('nr_rg') != NULL)?old('nr_rg'):'' }}"/>
                                                               @if ($errors->has('nr_rg'))
                                                               <span class="invalid-feedback" role="alert">
                                                                   <strong>{{ $errors->first('nr_rg') }}</strong>
                                                               </span>
                                                               @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="dt_nascimento">Data de Nascimento*</label>
                                                        <input id="dt_nascimento" type="date"
                                                               class="form-control form-control-sm {{ $errors->has('dt_nascimento') ? 'is-invalid' : '' }}"
                                                               name="dt_nascimento"
                                                               value="{{$data->dt_nascimento == 'is-valid' ? $data->dt_nascimento : (old('dt_nascimento') != NULL)?old('dt_nascimento'):'' }}"/>
                                                               @if ($errors->has('dt_nascimento'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('dt_nascimento') }}</strong>
                                                                </span>
                                                                @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex justify-content-center">
                                                    <div class="col-md-12">
                                                        <label for="ds_observacao">Obsevações</label>
                                                        <textarea id="ds_observacao" type="text"
                                                                  class="form-control form-control-sm"
                                                                  name="ds_observacao">{{ $data->ds_observacao != NULL ? $data->ds_observacao :old('ds_observacao') }}</textarea>
                                                                </div>
                                                </div>
                                            @else
                                                <div class="form-group row d-flex justify-content-center">
                                                    <div class="col-md-12">
                                                        <label for="nm_razao_social">Razão Social*</label>
                                                        <input id="nm_razao_social" type="text"
                                                               class="form-control form-control-sm {{$errors->has('nm_razao_social') ? 'is-invalid' : '' }}"
                                                           name="nm_razao_social" value="{{ old('nm_razao_social') }}"/>
                                                            @if ($errors->has('nm_razao_social'))
                                                        <span class="invalid-feedback" role="alert">
                                                               <strong>{{$errors->first('nm_razao_social')}}</strong>
                                                           </span>
                                                    @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex justify-content-center">
                                                    <div class="col-md-4">
                                                        <label for="cnpj">CNPJ*</label>
                                                        <input id="cnpj" type="text"
                                                               class="form-control form-control-sm {{$errors->has('nr_cnpj') ? 'is-invalid' : '' }}"
                                                               data-mask="00.000.000/0000-00" name="nr_cnpj"
                                                               value="{{ old('nr_cnpj') }}"/>
                                                        @if ($errors->has('nr_cnpj'))
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{$errors->first('nr_cnpj')}}</strong>
                                                                </span>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="ins_estadual">Inscrição Estadual*</label>
                                                        <input id="ins_estadual" type="text"
                                                               class="form-control form-control-sm  {{$errors->has('nr_insc_estadual') ? 'is-invalid' : '' }}"
                                                               name="nr_insc_estadual"
                                                               value="{{ old('nr_insc_estadual') }}"/>
                                                        @if ($errors->has('nr_insc_estadual'))
                                                            <span class="invalid-feedback" role="alert">
                                                               <strong>{{$errors->first('nr_insc_estadual')}}</strong>
                                                               </span>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="ins_municipal">Inscrição Municipal*</label>
                                                        <input id="ins_municipal" type="text"
                                                               class="form-control form-control-sm {{$errors->has('nr_insc_municipal') ? 'is-invalid' : '' }}"
                                                               name="nr_insc_municipal"
                                                               value="{{ old('nr_insc_municipal') }}"/>
                                                        @if ($errors->has('nr_insc_municipal'))
                                                            <span class="invalid-feedback" role="alert">
                                                               <strong>{{$errors->first('nr_insc_municipal')}}</strong>
                                                               </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex justify-content-center">
                                                    <div class="col-md-12">
                                                        <label for="nm_completo">Nome Completo*</label>
                                                        <input id="nm_completo" type="text"
                                                               class="form-control form-control-sm {{$errors->has('nm_completo') ? 'is-invalid' : '' }}"
                                                               name="nm_completo"
                                                               value="{{$data->nm_completo == 'is-valid' ? $data->nm_completo : (old('nm_completo') != NULL)?old('nm_completo'):'' }}"/>
                                                               @if ($errors->has('nm_completo'))
                                                            <span class="invalid-feedback" role="alert">
                                                               <strong>{{$errors->first('nm_completo')}}</strong>
                                                               </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex justify-content-center">
                                                    <div class="col-md-4">
                                                        <label for="nr_cpf">CPF*</label>
                                                        <input id="nr_cpf" type="text"
                                                               class="form-control form-control-sm {{$errors->has('nr_cpf') ? 'is-invalid' : '' }}"
                                                               data-mask="000.000.000-00" name="nr_cpf"
                                                               value="{{ old('nr_cpf') }}"/>
                                                        @if ($errors->has('nr_cpf'))
                                                            <span class="invalid-feedback" role="alert">
                                                               <strong>{{$errors->first('nr_cpf')}}</strong>
                                                               </span>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="nr_rg">RG*</label>
                                                        <input id="nr_rg" type="text"
                                                               class="form-control form-control-sm {{$errors->has('nr_rg') ? 'is-invalid' : '' }}"
                                                               name="nr_rg" value="{{ old('nr_rg') }}"
                                                               data-mask="00.000.000-0"/>
                                                        @if ($errors->has('nr_rg'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{$errors->first('nr_rg')}}</strong>
                                                                </span>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="dt_nascimento">Data de Nascimento*</label>
                                                        <input id="dt_nascimento" type="date"
                                                               class="form-control form-control-sm {{$errors->has('dt_nascimento') ? 'is-invalid' : '' }}"
                                                               name="dt_nascimento" value="{{ old('dt_nascimento') }}"/>
                                                        @if ($errors->has('dt_nascimento'))
                                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$errors->first('dt_nascimento')}}</strong>
                                                </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row d-flex justify-content-center">
                                                    <div class="col-md-12">
                                                    <label for="obsevacao">Obsevações*</label>
                                                    <textarea id="obsevacao" type="text"
                                                              class="form-control form-control-sm "
                                                              name="ds_observacao">{{ $data->ds_observacao != NULL ? $data->ds_observacao :old('ds_observacao') }}</textarea>
                                                   </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="tab-pane fade" id="nav-banco" role="tabpanel"
                                             aria-labelledby="nav-banco-tab">
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-2">
                                                    <div class="form-check form-check-inline">
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#frmBancoModal">
                                                            <i class="fa fa-plus"></i> Banco
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <table id="tblBanco" class="table table-sm table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">Banco</th>
                                                            <th scope="col">Agencia</th>
                                                            <th scope="col">Conta</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if(sizeof($data->bancos) > 0)
                                                            @foreach($data->bancos as $banco)
                                                                <tr id="{{$banco->id}}">
                                                                    <td>{{$banco->nomeBanco->nm_banco}}</td>
                                                                    <td>{{$banco->nr_agencia}}</td>
                                                                    <td>{{$banco->nr_conta}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirBanco' type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-id="{{$banco->id}}"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverBancoModal'><i
                                                                                    class='fa fa-trash'></i></button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <tr id="banco-null">
                                                                <td colspan="4" class="text-center"> Nenhum banco
                                                                    registrado
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-valores" role="tabpanel"
                                             aria-labelledby="nav-valores-tab">

                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-2">
                                                    <div class="form-check form-check-inline">
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#frmValorModal">
                                                            <i class="fa fa-plus"></i> Valor
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <table id="tblValor" class="table table-sm table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">Cidade</th>
                                                            <th scope="col">Valor</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (sizeof($data->valores) > 0)
                                                            @foreach($data->valores as $valor)
                                                                <tr id="{{$valor->id}}">
                                                                    <td>{{$valor->cidade->nm_cidade}}</td>
                                                                    <td>{{$valor->nr_valor}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirValor' type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-id="{{$valor->id}}"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverValorModal'>
                                                                            <i class='fa fa-trash'></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        @else
                                                            <tr id="valor-null">
                                                                <td colspan="3" class="text-center"> Nenhum valor
                                                                    registrado
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="nav-assessor" role="tabpanel"
                                             aria-labelledby="nav-assessor-tab">
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-2">
                                                    <div class="form-check form-check-inline">
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#frmAssessorModal">
                                                            <i class="fa fa-plus"></i> Assessor
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <table class="table table-sm table-striped"
                                                           id="tblAssessor">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">Nome do Assessor</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (sizeof($data->assessores) > 0)
                                                            @foreach($data->assessores as $assessor)
                                                                <tr id="{{$assessor->id}}">
                                                                    <td>{{$assessor->nm_acessor}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirAssessor' type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-id="{{$assessor->id}}"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverAssessorModal'>
                                                                            <i class='fa fa-trash'></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        @else
                                                            <tr id="assesssor-null">
                                                                <td colspan="2" class="text-center"> Nenhum assessor
                                                                    registrado
                                                                </td>
                                                            </tr>
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-descricao" role="tabpanel"
                                             aria-labelledby="nav-contact-tab">
                                            <div class="form-group row d-flex justify-content-center text-center">
                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#frmChamadaModal">
                                                        Chamada*
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#frmCurriculoModal">
                                                        Currículo*
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#frmCurriculoTecModal">
                                                        Currículo Técnico*
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#frmFormaPagamentoModal">
                                                        Forma de Pagamento*
                                                    </button>

                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#frmInvestimentoModal">
                                                        Investimento*
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#frmEquipamentoModal">
                                                        Equipamentos Necessários*
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#frmObservacaoModal">
                                                        Observações*
                                                    </button>
                                                </div>
                                                <div class="col-md-12">
                                                    <table class="table table-sm table-striped"
                                                           id="tblDescricao">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">Descrição</th>
                                                            <th scope="col">Conteúdo</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if ($data->ds_chamada != NULL
                                                            || $data->ds_curriculo != NULL
                                                            || $data->ds_curriculo_tecnico != NULL
                                                            || $data->ds_observacao != NULL
                                                            || $data->ds_investimento != NULL
                                                            || $data->ds_forma_pagamento != NULL
                                                            || $data->ds_equipe_necessario != NULL)

                                                            @if($data->ds_chamada != NULL)
                                                                <tr id="chamada">
                                                                    <td>Chamada</td>
                                                                    <td class='text-truncate'>{{$data->ds_chamada}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirDescricao' type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-tipo="chamada"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverDescricaoModal'>
                                                                            <i class='fa fa-trash'></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if($data->ds_curriculo != NULL)
                                                                <tr id="curriculo">
                                                                    <td>Currículo Resumido</td>
                                                                    <td class='text-truncate'>{{$data->ds_curriculo}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirDescricao' type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-tipo="curriculo"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverDescricaoModal'>
                                                                            <i class='fa fa-trash'></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if($data->ds_curriculo_tecnico != NULL)
                                                                <tr id="curriculoTec">
                                                                    <td>Currículo Técnico</td>
                                                                    <td class='text-truncate'>{{$data->ds_curriculo_tecnico}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirDescricao' type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-tipo="curriculoTec"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverDescricaoModal'>
                                                                            <i class='fa fa-trash'></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if($data->ds_observacao != NULL)
                                                                <tr id="obs">
                                                                    <td>Observações</td>
                                                                    <td class='text-truncate'>{{$data->ds_observacao}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirDescricao' type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-tipo="obs"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverDescricaoModal'>
                                                                            <i class='fa fa-trash'></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if($data->ds_investimento != NULL)
                                                                <tr id="investimento">
                                                                    <td>Investimento</td>
                                                                    <td class='text-truncate'>{{$data->ds_investimento}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirDescricao' type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-tipo="investimento"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverDescricaoModal'>
                                                                            <i class='fa fa-trash'></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if($data->ds_forma_pagamento != NULL)
                                                                <tr id="pgto">
                                                                    <td>Forma de Pagamento</td>
                                                                    <td class='text-truncate'>{{$data->ds_forma_pagamento}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirDescricao' type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-tipo="pgto"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverDescricaoModal'>
                                                                            <i class='fa fa-trash'></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if($data->ds_equipe_necessario != NULL)
                                                                <tr id="equipamento">
                                                                    <td>Equipamento Necessário</td>
                                                                    <td class='text-truncate'>{{$data->ds_equipe_necessario}}</td>
                                                                    <td class='text-right'>
                                                                        <button id='excluirDescricao' type='button'
                                                                                class='btn btn-danger btn-sm'
                                                                                data-tipo="equipamento"
                                                                                data-toggle='modal'
                                                                                data-target='#frmRemoverDescricaoModal'>
                                                                            <i class='fa fa-trash'></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                        @else
                                                            <tr id="descricao-null">
                                                                <td colspan="3" class="text-center"> Nenhuma
                                                                    descrição registrada
                                                                </td>
                                                            </tr>
                                                        @endif

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-video" role="tabpanel"
                                             aria-labelledby="nav-contact-tab">
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="col-md-6">
                                                    @if(isset($data->ds_titulo_video))
                                                    <label for="ds_titulo_video">Titulo*</label>
                                                    <input id="ds_titulo_video" type="text"
                                                           class="form-control form-control-sm {{ $errors->has('ds_titulo_video') ? 'is-invalid' : '' }}"
                                                           name="ds_titulo_video"
                                                           value="{{$data->ds_titulo_video == 'is-valid' ? $data->ds_titulo_video : (old('ds_titulo_video') != NULL)?old('ds_titulo_video'):'' }}"/>
                                                           @if ($errors->has('ds_titulo_video'))
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $errors->first('ds_titulo_video') }}</strong>
                                                           </span>
                                                       @endif
                                                           @else
                                                    <label for="ds_titulo_video">Titulo*</label>
                                                    <input id="ds_titulo_video" type="text"
                                                           class="form-control form-control-sm {{ $errors->has('ds_titulo_video') ? 'is-invalid' : '' }}"
                                                           name="ds_titulo_video" value="{{ old('ds_titulo_video') }}"/>
                                                    @if ($errors->has('ds_titulo_video'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('ds_titulo_video') }}</strong>
                                                        </span>
                                                    @endif
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    @if(isset($data->ds_url_video))
                                                    <label for="ds_url_video">URL*</label>
                                                    <input id="ds_url_video" type="text"
                                                           class="form-control form-control-sm {{ $errors->has('ds_url_video') ? 'is-invalid' : '' }}"
                                                           name="ds_url_video"
                                                           value="{{$data->ds_url_video == 'is-valid' ? $data->ds_url_video : (old('ds_url_video') != NULL)?old('ds_url_video'):'' }}"/>
                                                           @if ($errors->has('ds_url_video'))
                                                               <span class="invalid-feedback" role="alert">
                                                                  <strong>{{ $errors->first('ds_url_video') }}</strong>
                                                               </span>
                                                           @endif
                                                           @else
                                                           <label for="ds_url_video">URL*</label>
                                                           <input id="ds_url_video" type="text"
                                                                  class="form-control form-control-sm {{ $errors->has('ds_url_video') ? 'is-invalid' : '' }}"
                                                                  name="ds_url_video"
                                                                  value="{{ old('ds_url_video') }}"/>
                                                           @if ($errors->has('ds_url_video'))
                                                               <span class="invalid-feedback" role="alert">
                                                                  <strong>{{ $errors->first('ds_url_video') }}</strong>
                                                               </span>
                                                           @endif
                                                           @endif
                                                        </div>
                                                <div class="col-md-12">
                                                    @if(isset($data->ds_descricao_video))
                                                    <label for="ds_descricao_video">Descrição*</label>
                                                    <textarea id="ds_descricao_video" type="text"
                                                              class="form-control form-control-sm"
                                                              name="ds_descricao_video"
                                                              title="Descrição do Video">{{$data->ds_descricao_video == "" ? "" : $data->ds_descricao_video}}</textarea>
                                                @else
                                                <label for="ds_descricao_video">Descrição*</label>
                                                <textarea id="ds_descricao_video" type="text"
                                                          class="form-control form-control-sm {{ $errors->has('ds_descricao_video') ? 'is-invalid' : '' }}"
                                                          name="ds_descricao_video"
                                                          title="Descrição do Video">{{ old('ds_descricao_video') }}</textarea>
                                                @if ($errors->has('ds_descricao_video'))
                                                    <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $errors->first('ds_descricao_video') }}</strong>
                                                    </span>
                                                @endif
                                                @endif
                                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 text-right">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-save"></i> Salvar
                                            </button>
                                            <a href="/dashboard/palestrante" class="btn btn-danger btn-sm">
                                                <i class="fa fa-close"></i> Cancelar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.banco.create')
    @include('dashboard.valor.create')
    @include('dashboard.idiomas.create')
    @include('dashboard.contato.create')
    @include('dashboard.assessor.create')
    @include('dashboard.endereco.create')
    @include('dashboard.descricao.chamada.create')
    @include('dashboard.descricao.curriculo.create')
    @include('dashboard.descricao.observacao.create')
    @include('dashboard.descricao.investimento.create')
    @include('dashboard.descricao.formaPagamento.create')
    @include('dashboard.descricao.equipNecessario.create')
    @include('dashboard.descricao.curriculoTecnico.create')

    @include('dashboard.banco.remover')
    @include('dashboard.valor.remover')
    @include('dashboard.contato.remover')
    @include('dashboard.assessor.remover')
    @include('dashboard.endereco.remover')
    @include('dashboard.descricao.remover')

@endsection
