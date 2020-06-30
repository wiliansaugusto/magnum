<div class="modal fade" id="frmNomeAberturaPropostaModal" tabindex="-1" role="dialog"
     aria-labelledby="frmNomeAberturaPropostaModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="frmNomeAberturaProposta" method="POST" action="/dashboard/proposta">
                <input id="num_proposta" type="text" name="num_proposta" value=000121 /> 
                <input id="status_proposta" type="hidden" name="status_proposta" value="2"/>

                <input id="id_usuario" type="hidden" name="id_usuario" value="{{ Auth::user()->id }}"/>
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Proposta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-md-12">
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-md-12">
                                    <label for="nome_solicitante">Nome do Solicitante*</label>
                                    <select id="tp_endereco" name="id_tp_endereco" class="form-control form-control-sm" required >
                                <option selected disabled>Selecione Solicitante</option>
                                @php
                                    $clientes = new App\Cliente();
                                    $result = $clientes::all();
                                @endphp
                                @foreach ( $result as $tipo)
                                    <option value="{{$tipo->id}}">{{$tipo->nm_cliente}}</option>
                                @endforeach
                            </select>
                                </div>
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
