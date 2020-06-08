<div class="modal fade" id="frmEnderecoModal" tabindex="-1" role="dialog" aria-labelledby="frmEnderecoModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form id="frmEndereco" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmEnderecoModalLabel">Adicionar Endereço</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_relacao" value="" />
                    <div id="msg-error-endereco" class="alert alert-danger" role="alert" style="display: none">
                        Não foi possível cadastrar um endereço nos dados cadastrais!
                    </div>
                    
                    
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-4">
                            <label for="id_pais">País</label>
                            @php
                                $paises = App\Pais::all();
                            @endphp

                            <select id="id_pais" name="id_pais" class="form-control form-control-sm select-find"
                                    style="width: 100%" required>
                                <option></option>
                                @foreach ($paises as $pais)
                                    <option value="{{$pais->id}}">
                                        {{$pais->nm_pais}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="id_estado">Estado</label>
                           
                            <select id="id_estado" name="id_estado" class="form-control form-control-sm select-find"
                                    style="width: 100%" required>
                                <option></option>
                                                                
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="id_cidade">Cidade</label>
                           
                            <select id="id_cidade" name="id_cidade" class="form-control form-control-sm select-find"
                                    style="width: 100%" required>
                                <option></option>
                                
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="nr_cep">CEP</label>
                            <input id="nr_cep" class="form-control form-control-sm" name="nr_cep" type="text"
                                   maxlength="8" value=""
                                   onkeypress="return event.charCode >= 48 && event.charCode <= 57" autofocus/>
                        </div>
                        <div class="col-md-10">
                            <label for="nm_endereco">Logradouro</label>
                            <input id="nm_endereco" type="text" class="form-control form-control-sm" name="nm_endereco"
                                   value=""/>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-3">
                            <label for="nr_endereco">Número</label>
                            <input id="nr_endereco" class="form-control form-control-sm" name="nr_endereco" type="text"
                                   maxlength="10" value="" />
                        </div>
                        <div class="col-md-9">
                            <label for="ds_complemento">Complemento</label>
                            <input id="ds_complemento" type="text" class="form-control form-control-sm"
                                   name="ds_complemento"
                                   value="" />
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                    
                        
                        
                        
                        
                        
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <label for="nm_bairro">Bairro</label>
                            <input id="nm_bairro" class="form-control form-control-sm" name="nm_bairro" type="text"
                                   value="" />
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <label for="tp_endereco">Tipo de Endereço</label>
                            <select id="tp_endereco" name="id_tp_endereco" class="form-control form-control-sm">
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
