<div class="modal fade" id="frmNomePalestranteModal" tabindex="-1" role="dialog"
     aria-labelledby="frmNomePalestranteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="frmNomePalestrante" method="POST">
                <input id="ds_ativo" type="hidden" name="ds_ativo" value="n"/>
                <input id="id_usuario" type="hidden" name="id_usuario" value="{{ Auth::user()->id }}"/>
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Palestrante</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-md-12">
                                    <label for="nome_palestrante">Nome do Palestrante</label>
                                    <input id="nome_palestrante" type="text" class="form-control form-control-sm"
                                           name="nm_palestrante" value="" autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                    <button type="reset" class="btn btn-warning">
                        Limpar
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="frmPalestranteModal" tabindex="-1" role="dialog" aria-labelledby="frmPalestranteModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xlg" role="document">
        <div class="modal-content">
            <form method="POST" action="/palestrante" enctype="multipart/form-data">
                @csrf
                <input id="id_palestrante" type="hidden" name="id_palestrante" value=""/>
                <input id="id_usuario" type="hidden" name="id_usuario" value="{{ Auth::user()->id }}"/>
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar
                        Palestrante</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-pessoais-tab" data-toggle="tab"
                                       href="#nav-pessoais" role="tab" aria-controls="nav-pessoais"
                                       aria-selected="true">Dados
                                        Pessoais</a>

                                    <a class="nav-item nav-link" id="nav-contrato-tab" data-toggle="tab"
                                       href="#nav-contrato" role="tab" aria-controls="nav-contrato"
                                       aria-selected="false">Dados
                                        Contratuais</a>

                                    <a class="nav-item nav-link" id="nav-banco-tab" data-toggle="tab"
                                       href="#nav-banco" role="tab" aria-controls="nav-banco"
                                       aria-selected="false">Dados
                                        Bancários</a>

                                    <a class="nav-item nav-link" id="nav-endereco-tab" data-toggle="tab"
                                       href="#nav-endereco" role="tab" aria-controls="nav-endereco"
                                       aria-selected="false">Endereços</a>

                                    <a class="nav-item nav-link" id="nav-assessor-tab" data-toggle="tab"
                                       href="#nav-assessor" role="tab" aria-controls="nav-assessor"
                                       aria-selected="false">Assessor</a>

                                    <a class="nav-item nav-link" id="nav-descricao-tab" data-toggle="tab"
                                       href="#nav-descricao" role="tab" aria-controls="nav-descricao"
                                       aria-selected="false">Descrição</a>

                                    <a class="nav-item nav-link" id="nav-categoria-tab" data-toggle="tab"
                                       href="#nav-categoria" role="tab" aria-controls="nav-categoria"
                                       aria-selected="false">Categoria</a>

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
                                            <label for="nome_palestrante">Nome do
                                                Palestrante</label>
                                            <input id="nm_palestrante" type="text" class="form-control form-control-sm"
                                                   name="nm_palestrante" value="" autofocus readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-4">
                                            <label for="Nome">Foto</label>
                                            <input id="nome" type="file"
                                                   class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                   name="nome" value="" required autofocus>

                                            @if ($errors->has('nome'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label for="Nome">Nacionalidade</label>
                                            <input id="nome" type="text"
                                                   class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                   name="nome" value="" required autofocus>

                                            @if ($errors->has('nome'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label for="Nome">Sexo</label>
                                            <input id="nome" type="text"
                                                   class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                   name="nome" value="" required autofocus>

                                            @if ($errors->has('nome'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <label for="Nome">Idiomas</label>
                                            <input id="nome" type="text"
                                                   class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                   name="nome" value="" required autofocus>

                                            @if ($errors->has('nome'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-4">
                                            <label for="Nome">Disponivel para
                                                Palestras</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                       id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Sim</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                       id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Não</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="Nome">Visivel no site</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                       id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Sim</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                       id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Não</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="Nome">Ranking do Palestrante</label><br>
                                            <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5"/>
                                                <label for="star5" title="text">5
                                                    stars</label>
                                                <input type="radio" id="star4" name="rate" value="4"/>
                                                <label for="star4" title="text">4
                                                    stars</label>
                                                <input type="radio" id="star3" name="rate" value="3"/>
                                                <label for="star3" title="text">3
                                                    stars</label>
                                                <input type="radio" id="star2" name="rate" value="2"/>
                                                <label for="star2" title="text">2
                                                    stars</label>
                                                <input type="radio" id="star1" name="rate" value="1"/>
                                                <label for="star1" title="text">1
                                                    star</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-2">
                                            <div class="form-check form-check-inline">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#frmContatoModal">
                                                    Adicionar Contato
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <table id="tblContato" class="table table-sm table-striped"
                                                   style="visibility: hidden">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Tipo de Contato</th>
                                                    <th scope="col">Contato</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-contrato" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <label for="Nome">Razão Social</label>
                                            <input id="nome" type="text"
                                                   class="form-control form-control-sm"
                                                   name="nome" value="" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-4">
                                            <label for="Nome">CNPJ</label>
                                            <input id="cnpj" type="text"
                                                   class="form-control form-control-sm"
                                                   data-inputmask="'mask' : '00.000.000/0000-00'"
                                                   name="nome" value="" required autofocus>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="Nome">Inscrição Estadual</label>
                                            <input id="ins_estadual" type="text"
                                                   class="form-control form-control-sm"
                                                   name="nome" value="" required autofocus>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="Nome">Inscrição Municipal</label>
                                            <input id="ins_municipal" type="text"
                                                   class="form-control form-control-sm"
                                                   data-mask=""
                                                   name="nome" value="" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <label for="Nome">Nome Completo</label>
                                            <input id="nome" type="text"
                                                   class="form-control form-control-sm"
                                                   name="nome" value="" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-4">
                                            <label for="Nome">CPF</label>
                                            <input id="nome" type="text"
                                                   class="form-control form-control-sm"
                                                   name="nome" value="" required autofocus>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="Nome">RG</label>
                                            <input id="nome" type="text"
                                                   class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                   name="nome" value="" required autofocus>

                                            @if ($errors->has('nome'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label for="Nome">Data de Nascimento</label>
                                            <input id="nome" type="text"
                                                   class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                   name="nome" value="" required autofocus>

                                            @if ($errors->has('nome'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <label for="Nome">Obsevações</label>
                                            <textarea id="nome" type="text"
                                                      class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                      name="nome" value="" required autofocus></textarea>

                                            @if ($errors->has('nome'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nome') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="nav-banco" role="tabpanel"
                                     aria-labelledby="nav-banco-tab">

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-2">
                                            <div class="form-check form-check-inline">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#frmBancoModal">
                                                    Adicionar Banco
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <table id="tblBanco" class="table table-sm table-striped"
                                                   style="visibility: hidden">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Banco</th>
                                                    <th scope="col">Agencia</th>
                                                    <th scope="col">Conta</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="nav-endereco" role="tabpanel"
                                     aria-labelledby="nav-endereco-tab">

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-2">
                                            <div class="form-check form-check-inline">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#frmEnderecoPalestranteModal">
                                                    Adicionar Endereço
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <table id="tblEnderecoPalestrante" class="table table-sm table-striped">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Tipo de Endereço</th>
                                                    <th scope="col">Endereço</th>
                                                </tr>
                                                </thead>
                                                <tbody>
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
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#frmAssessorModal">
                                                    Adicionar Assessor
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <table class="table table-sm table-striped" id="tblAssessor"
                                                   style="visibility: hidden">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Nome do Assessor</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-descricao" role="tabpanel"
                                     aria-labelledby="nav-contact-tab">
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-2">
                                            <div class="form-check form-check-inline">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#frmDescricaoModal">
                                                    Adicionar Descrição
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <table class="table table-sm table-striped" id="tblAssessor"
                                                   style="visibility: hidden">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Descrição</th>
                                                    <th scope="col">Conteúdo</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Mark</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Jacob</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry the Bird</td>
                                                    <td>Larry the Bird</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-categoria" role="tabpanel"
                                     aria-labelledby="nav-contact-tab">
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-2">
                                            <div class="form-check form-check-inline">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#frmCategoriaModal">
                                                    Adicionar Categoria
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <ul>
                                                @php
                                                    $retorno = new App\Categoria();
                                                    $categorias = $retorno::all();
                                                @endphp

                                                @foreach ( $categorias as $categoria)
                                                    <li>{{$categoria->nm_categoria}}</li>
                                                    @foreach ($categoria->subCategorias as $subItem)
                                                        <li> {{$categoria->nm_categoria}} -
                                                            {{$subItem->nm_sub_cat}}</li>
                                                    @endforeach
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-video" role="tabpanel"
                                     aria-labelledby="nav-contact-tab">
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-6">
                                            <label for="Nome">Titulo</label>
                                            <input id="nome" type="text"
                                                   class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                   name="nome" value="" required autofocus>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Nome">URL</label>
                                            <input id="nome" type="text"
                                                   class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                   name="nome" value="" required autofocus>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="Nome">Descrição</label>
                                            <textarea id="nome" type="text"
                                                      class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                      name="nome" value="" required autofocus></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Salvar
                        </button>
                        <button type="reset" class="btn btn-warning">
                            Limpar
                        </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Cancelar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


{{--@include('dashboard.contato.create')--}}
{{--@include('dashboard.banco.create')--}}
{{--@include('dashboard.endereco.create')--}}
{{--@include('dashboard.descricao.create')--}}
{{--@include('dashboard.assessor.create')--}}
{{--@include('dashboard.categoria.create')--}}
