<div class="modal fade" id="frmValorModal" tabindex="-1" role="dialog"
     aria-labelledby="frmValorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmValorModalLabel">Cadastrar Valor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="frmValor" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div id="msg-error-valor" class="alert alert-danger" role="alert" style="display: none">
                            Não foi possível cadastrar um valor para o palestrante!
                        </div>
                        <div class="col-md-12">
                            <label for="nr_valor">Valor</label>
                            <input id="nr_valor" type="text"
                                   class="form-control form-control-sm"
                                   name="nr_valor" value="" required autofocus>
                        </div>
                        <div class="col-md-12">
                            <label for="id_tp_servico">Tipos de Serviço</label>
                            @php
                                $servicos = App\TiposDeServico::all();
                            @endphp

                            <select id="id_tp_servico" name="id_tp_servico" class="form-control form-control-sm select-find"
                                    style="width: 100%" required>
                                <option></option>
                                @foreach ($servicos as $item)
                                    <option value="{{$item->id}}">
                                        {{$item->nm_tipo_servico}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-4">
                            <label for="id_pais_valor">País</label>
                            @php
                                $paises = App\Pais::all();
                            @endphp

                            <select id="id_pais_valor" name="id_pais" class="form-control form-control-sm select-find"
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
                            <label for="id_estado_valor">Estado</label>

                            <select id="id_estado_valor" name="id_estado" class="form-control form-control-sm select-find"
                                    style="width: 100%" required>
                                <option></option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="id_cidade_valor">Cidade</label>

                            <select id="id_cidade_valor" name="id_cidade" class="form-control form-control-sm select-find"
                                    style="width: 100%" required>
                                <option></option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col md-12">
                            <label for="ds_observacao">Observação</label>
                            <textarea  class="form-control" name="ds_observacao" id="ds_observacao" cols="30" rows="4"></textarea>
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
