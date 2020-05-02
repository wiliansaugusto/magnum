<div class="modal fade" id="frmEnderecoPalestranteModal" tabindex="-1" role="dialog" aria-labelledby="frmEnderecoModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form id="frmEnderecoPalestrante" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmEnderecoModalLabel">Adicionar Endereço</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-2">
                            <label for="nr_cep">CEP</label>
                            <input id="nr_cep" class="form-control form-control-sm" name="nr_cep" type="text"
                                   maxlength="8" value=""
                                   onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                   required autofocus/>
                        </div>
                        <div class="col-md-10">
                            <label for="nm_endereco">Logradouro</label>
                            <input id="nm_endereco" type="text" class="form-control form-control-sm" name="nm_endereco"
                                   value="" required/>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-3">
                            <label for="nr_endereco">Número</label>
                            <input id="nr_endereco" class="form-control form-control-sm" name="nr_endereco" type="text"
                                   maxlength="10" value=""
                                   required/>
                        </div>
                        <div class="col-md-9">
                            <label for="ds_complemento">Complemento</label>
                            <input id="ds_complemento" type="text" class="form-control form-control-sm"
                                   name="ds_complemento"
                                   value="" />
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-5">
                            <label for="nm_bairro">Bairro</label>
                            <input id="nm_bairro" class="form-control form-control-sm" name="nm_bairro" type="text"
                                   value="" required />
                        </div>
                        <div class="col-md-5">
                            <label for="nm_cidade">Cidade</label>
                            <input id="nm_cidade" type="text" class="form-control form-control-sm" name="nm_cidade"
                                   value="" required />
                        </div>
                        <div class="col-md-2">
                            <label for="nm_estado">Estado</label>
                            <input id="nm_estado" type="text" class="form-control form-control-sm" name="nm_estado"
                                   value="" required />
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <label for="tp_endereco">Tipo de Endereço</label>
                            <select id="tp_endereco" name="id_tp_endereco" class="form-control form-control-sm" required>
                                <option selected disabled>Selecione Tipo de Endereço</option>
                                @php
                                    $tipoEndereco = new App\TipoEndereco();
                                    $result = $tipoEndereco::all();
                                @endphp
                                @foreach ( $result as $tipo)
                                    <option value="{{$tipo->id}}">{{$tipo->nm_tipo_endereco}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                    <button type="reset" class="btn btn-warning text-white">
                        Limpar
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
