<div class="modal fade" id="frmEstadoEditModal" tabindex="-1" role="dialog" aria-labelledby="frmEstadoEditModal"
     aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" action="/dashboard/estado" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <div class="modal-header">
                            <h5 class="modal-title" id="frmEstadoEditLabel">Editar Estado</h5>
                        </div>
                        <div class="modal-body text-left">
                            <div class="form-group row d-flex justify-content-center">
                                <input id="id_estadoEdit" type="hidden" name="id" value="" />
                                <input id="id_paisEdit" type="hidden" name="id_pais" value="" />
                                <div class="col-md-12">
                                    <label for="nm_estadoEdit">Nome da Cidade</label>
                                    <input id="nm_estadoEdit" type="text"
                                           class="form-control form-control-sm{{ $errors->has('nm_estado') ? ' is-invalid' : '' }}"
                                           name="nm_estado" value="{{ old('nm_estado') }}" required autofocus
                                           autocomplete="off"/>

                                    @if ($errors->has('nm_estado'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nm_estado') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
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
