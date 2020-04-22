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
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <label for="id_cidade">Cidade</label>
                            @php
                                $cidades = App\Cidade::all();
                            @endphp

                            <select id="id_cidade" name="id_cidade" class="form-control form-control-sm select-find"
                                    style="width: 100%">
                                <option></option>
                                @foreach ($cidades as $item)
                                    <option value="{{$item->id}}">
                                        {{$item->nm_cidade}}
                                    </option>
                                @endforeach
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
