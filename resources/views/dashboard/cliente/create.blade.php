<div class="modal fade" id="frmNomeAberturaClienteModal" tabindex="-1" role="dialog"
     aria-labelledby="frmNomeAberturaClienteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="frmNomeAberturaCliente" method="POST" action="/dashboard/cliente/">
                
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <h2 class="modal-title" id="frmContatoModalLabel">Dados do Cliente</h2>
                </div>
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">                
                            <input id="id_usuario" name="id_usuario" type="hidden" value="{{ Auth::user()->id }}"/>
                            <div>
                                <label for="nm_cliente">Cliente</label>
                                <input id="nm_cliente" type="text" 
                                   class="form-control form-control-sm" name="nm_cliente" />
                                                       
                                <div class="colmd-4 form-control form-control-sm">
                                    <label for="ind_cliente">Tipo cadastro</label>
                                    <input id="ind_cliente" type="radio" name="ind_cliente" value="S"/> Solicitante 
                                    <input id="ind_cliente" type="radio" name="ind_cliente" value="C"/> Cliente 
                                    <input id="ind_cliente" type="radio" name="ind_cliente" value="A"/> Ambos 
                                </div>
                                <div></div>

                                <div class="colmd-4 form-control form-control-sm">
                                    <label for="tipo_cliente">Tipo do cliente</label>
                                    <input id="tipo_cliente" type="radio" name="tipo_cliente" value="F"/> Fisíca
                                    <input id="tipo_cliente" type="radio" name="tipo_cliente" value="J"/> Juridica
                                    <input id="tipo_cliente" type="radio" name="tipo_cliente" value="O"/> Outra
                                </div>

                                <label for="cpf_cliente">Cpf do cliente</label>
                                <input id="cpf_cliente" type="text" 
                                   class="form-control form-control-sm" name="cpf_cliente" />

                                   <label for="cnpj_cliente">Cnpj do cliente</label>
                                <input id="cnpj_cliente" type="text" 
                                   class="form-control form-control-sm" name="cnpj_cliente" />
                                   <label for="obs_cliente">Tema do cliente</label>
                                <input id="tema_cliente" type="textarea" 
                                   class="form-control form-control-sm" name="tema_cliente" />
                            </div>
                        </div>   
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Salvar
                    </button>
                    <button type="reset" class="btn btn-warning btn-sm text-white">
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
