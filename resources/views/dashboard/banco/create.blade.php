<div class="modal fade" id="frmBancoModal" tabindex="-1" role="dialog"
     aria-labelledby="frmBancoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmBancoModalLabel">Cadastrar Dados Bancários</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="frmBanco" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-4">
                            <label for="id_nm_banco">Banco</label>
                            @php
                                $bancos = App\NomeBanco::all()->sortBy('nm_banco');
                            @endphp

                            <select id="id_nm_banco" name="id_nm_banco" class="form-control form-control-sm select-find"
                                    style="width: 100%" required>
                                <option selected disabled>Selecionar Banco</option>
                                @foreach ($bancos as $item)
                                    <option class="form-control form-control-sm" name="id_nm_banco"
                                            value="{{$item->id}}">
                                        {{$item->nm_banco}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="nr_agencia">Agencia</label>
                            <input id="nr_agencia" type="text"
                                   class="form-control form-control-sm"
                                   name="nr_agencia" value="" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="nr_conta">Conta</label>
                            <input id="nr_conta" type="text"
                                   class="form-control form-control-sm"
                                   name="nr_conta" value="" required autofocus>
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
