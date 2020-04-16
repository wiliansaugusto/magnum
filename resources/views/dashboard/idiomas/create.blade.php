<div class="modal fade" id="frmIdiomasModal" tabindex="-1" role="dialog" aria-labelledby="frmIdiomasModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmIdiomasModalLabel">Cadastrar Idiomas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-md-3">
                        <form id="frmIdiomas" method="POST">
                            @csrf
                            @php
                            $idiomas = App\Idiomas::All();
                            @endphp
                            <select id="idioma" name="id_idiomas" class="form-control form-control-sm">
                                <option selected disabled>Selecionar Idioma</option>
                                @foreach ($idiomas as $idioma)
                                <option value="{{$idioma->id}}">{{$idioma->ds_idioma}}</option>
                                @endforeach
                            </select>
                    </div>


                    <div class="col-md-9">
                        <table id="tblIdiomasInterna" class="table table-sm table-striped" style="visibility: hidden">
                            <thead>
                                <tr>
                                    <th scope="col">Idiomas</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
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
</div>
