<div class="modal fade" id="frmContatoModal" tabindex="-1" role="dialog" aria-labelledby="frmContatoModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form id="frmContato" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Cadastrar Contato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value=""/>
                    <input type="hidden" id="rel" name="rel" value=""/>
                    <div class="form-group row d-flex justify-content-center">
                        <div id="nr_contato" class="col-md-8">
                            <label for="contato">Contato</label>
                            <input id="contato" type="text"
                                   class="form-control form-control-sm"
                                   name="ds_contato" value="" required
                                   autofocus />
                        </div>
                        <div class="col-md-4">
                            <label for="tipo_contato">Tipo Contato</label>
                            <select id="tipo_contato" name="id_tp_contato" class="form-control form-control-sm">
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
