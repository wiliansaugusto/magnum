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

                                    <a class="nav-item nav-link" id="nav-banco-tab" data-toggle="tab" href="#nav-banco"
                                       role="tab" aria-controls="nav-banco" aria-selected="false">Dados
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
                                            <label for="nm_palestrante">Nome do
                                                Palestrante</label>
                                            <input id="nm_palestrante" type="text" class="form-control form-control-sm"
                                                   name="nm_palestrante" value="" autofocus readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-4">
                                            <label for="ds_foto">Foto</label>
                                            <input id="ds_foto" type="file" class="form-control form-control-sm"
                                                   name="ds_foto" value="" required autofocus/>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="ds_nacionalidade">Nacionalidade</label>
                                            <select id="ds_nacionalidade" name="ds_nacionalidade"
                                                    class="form-control form-control-sm" required autofocus>
                                                <option class="form-control form-control-sm" selected disabled>
                                                    Nacionalidade
                                                </option>
                                                <option class="form-control form-control-sm" value="Brasileiro">
                                                    Brasileiro
                                                </option>
                                                <option class="form-control form-control-sm" value="Estrangeiro">
                                                    Estrangeiro
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="ds_sexo">Sexo</label>
                                            <select id="ds_sexo" name="ds_sexo" class="form-control form-control-sm"
                                                    required autofocus>
                                                <option class="form-control form-control-sm" selected disabled>Sexo
                                                </option>
                                                <option class="form-control form-control-sm" value="Masculino">Masculino
                                                </option>
                                                <option class="form-control form-control-sm" value="Feminino">Feminino
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-4">
                                            <label for="ds_disponivel">Disponivel para
                                                Palestras</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ds_ativo"
                                                       id="ds_disponivel2" value="0">
                                                <label class="form-check-label" for="ds_disponivel2">Não</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ds_ativo"
                                                       id="ds_ativo1" value="1">
                                                <label class="form-check-label" for="ds_ativo1">Sim</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="Nome">Visivel no site</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ds_visivel_site"
                                                       id="ds_visivel_site1" value="1">
                                                <label class="form-check-label" for="ds_visivel_site1">Sim</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ds_visivel_site"
                                                       id="ds_visivel_site2" value="0">
                                                <label class="form-check-label" for="ds_visivel_site2">Não</label>
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
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#frmIdiomasModal">
                                                Adicionar Idiomas
                                            </button>
                                        </div>

                                        <div class="col-md-10">
                                            <div id="expandirIdioma" style="visibility: hidden">
                                                <a data-toggle="collapse" href="#tblIdiomasxp" role="button"
                                                   aria-expanded="false">
                                                    Idiomas
                                                    <i class="fas fa-chevron-down"></i></a>

                                            </div>
                                            <div class="collapse" id="tblIdiomasxp">
                                                <div class="card-body ">
                                                    <table id="tblIdiomas" class=" table table-sm table-striped">
                                                        <thead>
                                                        <tr>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
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
                                            <label for="nm_razao_social">Razão Social</label>
                                            <input id="nm_razao_social" type="text" class="form-control form-control-sm"
                                                   name="nm_razao_social" value="" required autofocus/>
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-4">
                                            <label for="cnpj">CNPJ</label>
                                            <input id="cnpj" type="text" class="form-control form-control-sm"
                                                   data-inputmask="'mask' : '00.000.000/0000-00'" name="cnpj" value=""
                                                   required autofocus/>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="ins_estadual">Inscrição Estadual</label>
                                            <input id="ins_estadual" type="text" class="form-control form-control-sm"
                                                   name="ins_estadual" value="" required autofocus/>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="ins_municipal">Inscrição Municipal</label>
                                            <input id="ins_municipal" type="text" class="form-control form-control-sm"
                                                   data-mask="'mask' : '00.000.000/0000-00'" name="ins_municipal"
                                                   value=""
                                                   required autofocus/>
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <label for="nm_completo">Nome Completo</label>
                                            <input id="nm_completo" type="text" class="form-control form-control-sm"
                                                   name="nm_completo" value="" required autofocus/>
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-4">
                                            <label for="nr_cpf">CPF</label>
                                            <input id="nr_cpf" type="text" class="form-control form-control-sm"
                                                   name="nr_cpf" value="" required autofocus/>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nr_rg">RG</label>
                                            <input id="nr_rg" type="text" class="form-control form-control-sm"
                                                   name="nr_rg" value="" required autofocus/>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="dt_nascimento">Data de Nascimento</label>
                                            <input id="dt_nascimento" type="date" class="form-control form-control-sm"
                                                   name="dt_nascimento" value="" required autofocus/>
                                        </div>
                                    </div>

                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <label for="obsevacao">Obsevações</label>
                                            <textarea id="obsevacao" type="text" class="form-control form-control-sm"
                                                      name="obsevacao" required autofocus></textarea>
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
                                            <table id="tblEnderecoPalestrante" class="table table-sm table-striped"
                                                   style="visibility: hidden">
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
                                    <div class="form-group row d-flex justify-content-center text-center">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#frmChamadaModal">
                                                Chamada
                                            </button>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#frmCurriculoModal">
                                                Currículo
                                            </button>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#frmCurriculoTecModal">
                                                Currículo Técnico
                                            </button>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#frmFormaPagamentoModal">
                                                Forma de Pagamento
                                            </button>

                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#frmInvestimentoModal">
                                                Investimento
                                            </button>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#frmEquipamentoModal">
                                                Equipamentos Necessários
                                            </button>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#frmObservacaoModal">
                                                Observações
                                            </button>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-sm table-striped" id="tblDescricao"
                                                   style="visibility: hidden">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Descrição</th>
                                                    <th scope="col">Conteúdo</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-categoria" role="tabpanel"
                                     aria-labelledby="nav-contact-tab">
                                    <div class="row d-flex justify-content-center text-center">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#frmSelecionarCategoriaModal">
                                                Selecionar Categorias
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-6 m-3">
                                            <div id="msg-erro-selcat" class="alert alert-danger" role="alert" style="display: none">
                                            </div>
                                            <table id="tblSelecionarCategoria" class="table table-sm table-striped">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col"></th>
                                                </tr>
                                                </thead>
                                                <tbody style="visibility: hidden">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-video" role="tabpanel"
                                     aria-labelledby="nav-contact-tab">
                                    <div class="form-group row d-flex justify-content-center">
                                        <div class="col-md-6">
                                            <label for="titulo">Titulo</label>
                                            <input id="titulo" type="text" class="form-control form-control-sm"
                                                   name="titulo" value="" required autofocus>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="url">URL</label>
                                            <input id="url" type="text" class="form-control form-control-sm" name="url"
                                                   value="" required autofocus>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="descricao">Descrição</label>
                                            <textarea id="descricao" type="text"
                                                      class="form-control form-control-sm{{ $errors->has('nome') ? ' is-invalid' : '' }}"
                                                      name="descricao" required autofocus
                                                      title="Descrição do Video"></textarea>
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
</div>
