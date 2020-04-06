<div class="modal fade" id="frmAssessorModal" tabindex="-3" role="dialog" aria-labelledby="frmAssessorModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmAssessorModalLabel">Cadastrar Assessor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-md-12">
                        <label for="nome_palestrante">Nome do
                            Palestrante</label>
                        <input id="nome_palestrante" type="text"
                               class="form-control form-control-sm{{ $errors->has('nome_palestrante') ? ' is-invalid' : '' }}"
                               name="nome_palestrante" value="" required
                               autofocus>

                        @if ($errors->has('nome_palestrante'))
                            <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('nome_palestrante') }}</strong>
                                                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-md-3">
                        <button type="button"
                                class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#frmContatoAcessorModal">
                            Adicionar Contato
                        </button>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-sm table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tipo de Contato</th>
                                <th scope="col">Contato</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
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
        </div>
    </div>
</div>

<div class="modal fade" id="frmContatoAcessorModal" tabindex="-1" role="dialog" aria-labelledby="frmContatoModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" action="/palestrante" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Contato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-8">
                            <label for="nome_palestrante">Contato</label>
                            <input id="nome_palestrante" type="text"
                                   class="form-control form-control-sm{{ $errors->has('nome_palestrante') ? ' is-invalid' : '' }}"
                                   name="nome_palestrante" value="" required
                                   autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="tipo_contato">Tipo Contato</label>
                            <select id="tipo_contato" name="id_tp_contato" class="form-control form-control-sm">
                                <option selected disabled>Selecione Tipo de Contato</option>
                                <option value="1">Telefone</option>
                            </select>
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