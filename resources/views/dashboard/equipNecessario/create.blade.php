<div class="modal fade" id="frmEquipamentoModal" tabindex="-1" role="dialog" aria-labelledby="frmEquipamentoModalLabel"
    aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmEquipamentoModalLabel">
                    Cadastrar Equipamentos Necessário
                </h5>
            </div>

            <form method="post" id="frmChamada">
                @csrf

                <div class="modal-body text-center ">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="ds_equip_necessario"> Equipamentos Necessário</label>
                                <textarea class="form-control" id="ds_equip_necessario" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <span style="background-color: blueviolet;">dasdsa</span>
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
