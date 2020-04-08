<div class="modal fade" id="frmDescricaoModal" tabindex="-1" role="dialog" aria-labelledby="frmAssessorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmDescricaoModalLabel">Cadastrar Descrições</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row d-flex justify-content-center  text-center">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-outline-dark" data-toggle="modal"
                            data-target="#frmChamadaModal">
                            Chamada
                        </button>
                        <button type="submit" class="btn btn-outline-dark" data-toggle="modal"
                            data-target="#frmCurriculoModal">
                            Currículo
                        </button>
                        <button type="submit" class="btn btn-outline-dark" data-toggle="modal"
                        data-target="#frmCurriculoTecModal">
                            Currículo Técnico
                        </button>
                        <button type="submit" class="btn btn-outline-dark" data-toggle="modal"
                        data-target="#frmFormaPagamentoModal">
                            Forma de Pagamento
                        </button>
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center text-center">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-outline-dark" data-toggle="modal"
                        data-target="#frmInvestimentoModal">
                            Investimento
                        </button>
                        <button type="submit" class="btn btn-outline-dark" data-toggle="modal"
                        data-target="#frmEquipamentoModal">
                            Equipamentos Necessários
                        </button>
                        <button type="submit" class="btn btn-outline-dark"data-toggle="modal"
                        data-target="#frmObservacaoModal">
                            Observações
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.chamada.create')
@include('dashboard.curriculo.create')
@include('dashboard.curriculoTecnico.create')
@include('dashboard.formaPagamento.create')
@include('dashboard.investimento.create')
@include('dashboard.equipNecessario.create')
@include('dashboard.observacao.create')
