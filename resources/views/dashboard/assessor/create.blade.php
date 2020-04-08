<div class="modal fade" id="frmAssessorModal" tabindex="-1" role="dialog" aria-labelledby="frmAssessorModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form id="frmAssessor" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmAssessorModalLabel">Cadastrar Assessor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <label for="nm_acessor">Nome Assessor(a)</label>
                            <input id="nm_acessor" type="text" class="form-control form-control-sm" name="nm_acessor"
                                   value="" required autofocus>
                        </div>
                    </div>
                    <div id="tableAssessor" class="form-group row d-flex justify-content-center">
                        <div class="col-md-3">
                            <button type="button"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#frmContatoAcessorModal">
                                Adicionar Contato
                            </button>
                        </div>
                        <div class="col-md-9">
                            <table id="tblContatoAssessor" class="table table-sm table-striped" style="visibility: hidden">
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
<div class="modal fade" id="frmContatoAcessorModal" tabindex="-1" role="dialog" aria-labelledby="frmContatoModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form id="frmContatoAcessor" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Contato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div id="nr_contatoPalestrante" class="col-md-8">
                            <label for="contatoPalestrante">Contato</label>
                            <input id="contatoPalestrante" type="text"
                                   class="form-control form-control-sm"
                                   name="ds_contato" value="" required
                                   autofocus/>
                        </div>
                        <div class="col-md-4">
                            <label for="tipo_contato_palestrante">Tipo Contato</label>
                            <select id="tipo_contato_palestrante" name="id_tp_contato"
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