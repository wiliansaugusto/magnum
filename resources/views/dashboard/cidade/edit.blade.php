<div class="modal fade" id="frmCidadeEditModal" tabindex="-1" role="dialog" aria-labelledby="frmCidadeEditModalLabel"
     aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" action="/dashboard/cidade" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <div class="modal-header">
                            <h5 class="modal-title" id="frmCidadeEditLabel">Editar Cidade</h5>
                        </div>
                        <div class="modal-body text-left">
                            <div class="form-group row d-flex justify-content-center">
                                <input id="id_cidadeEdit" type="hidden" name="id" value="" />
                                <input id="id_estadoEdit" type="hidden" name="id_estado" value="" />
                                <div class="col-md-12">
                                    <label for="nm_cidade">Nome da Cidade</label>
                                    <input id="nm_cidade" type="text"
                                           class="form-control form-control-sm{{ $errors->has('nm_cidade') ? ' is-invalid' : '' }}"
                                           name="nm_cidade" value="{{ old('nm_cidade') }}" required autofocus
                                           autocomplete="off"/>

                                    @if ($errors->has('nm_cidade'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nm_cidade') }}</strong>
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
