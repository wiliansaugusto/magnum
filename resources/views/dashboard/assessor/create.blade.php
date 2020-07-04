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
                    <div id="msg-error-assessor" class="alert alert-danger" role="alert" style="display: none">
                        Não foi possível cadastrar o assessor, verifique se há contato cadastrado ou todos os dados estao certos.
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <label for="nm_acessor">Nome Assessor(a)</label>
                            <input id="nm_acessor" type="text" class="form-control form-control-sm" name="nm_acessor"
                                   value="" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <label for="id_tp_acessor">Tipo de Assesor(a)</label>
                            <select id="id_tp_acessor" name="id_tp_acessor" class="form-control form-control-sm select-find" required style="width: 100%">
                                <option></option>
                                @php
                                    $tiposAcessores = App\TipoAcessor::all();
                                @endphp
                                @foreach ( $tiposAcessores as $tipoAcessor)
                                    <option value="{{$tipoAcessor->id}}">{{$tipoAcessor->nm_tp_acessor}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('id_pais'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('id_pais') }}</strong>
                        </span>
                            @endif
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
                            <table id="tblContatoAssessor" class="table table-sm table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Tipo de Contato</th>
                                    <th scope="col">Contato</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id="contato-assessor-null">
                                    <td colspan="3" class="text-center">Nenhum contato registrado</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Salvar
                    </button>
                    <button type="reset" class="btn btn-warning text-white btn-sm">
                        <i class="fa fa-eraser"></i> Limpar
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                        <i class="fa fa-close"></i> Cancelar
                    </button>
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
                        <div id="nr_contatoAssessor" class="col-md-8">
                            <label for="contatoAssessor">Contato</label>
                            <input id="contatoAssessor" type="text"
                                   class="form-control form-control-sm"
                                   name="ds_contato" value="" required
                                   autofocus/>
                        </div>
                        <div class="col-md-4">
                            <label for="tipo_contato_assessor">Tipo Contato</label>
                            <select id="tipo_contato_assessor" name="id_tp_contato"
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
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Salvar
                    </button>
                    <button type="reset" class="btn btn-warning text-white btn-sm">
                        <i class="fa fa-eraser"></i> Limpar
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                        <i class="fa fa-close"></i> Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
