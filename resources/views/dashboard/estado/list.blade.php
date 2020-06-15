<div class="modal fade" id="modalEstados" tabindex="-1" role="dialog"
     aria-labelledby="ModalList" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEstado">Estados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-11 col-sm-11">
                        @csrf
                        <label for="pais_filtro_estado">Paises</label>
                        <select id="pais_filtro_estado" name="id_pais"
                                class="form-control form-control-sm select-find"
                                style="width: 100%" required>
                            <option></option>
                            @foreach ($paises= App\Pais::All() as $pais)
                                <option value="{{$pais->id}}">
                                    {{$pais->nm_pais}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <label></label>
                        <button type="submit" id="pesquisarEstado" class="btn btn-primary btn-sm float-left"
                                style="width: 100%">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <div id="regLinhaEstado" style="display: none">
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-4 col-sm-4">
                            <label for="maxRows">Registros por linha</label>
                            <select class="form-control form-control-sm" name="state" id="maxRows">
                                <option value="10" selected>10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                    </div>
                </div>
                <table id="tblListaEstado" class="table table-striped table-sm table-hover mt-2">
                    <thead class="thead-light">
                    <tr>
                        <th>Estados</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div id="pgListEstado" class='pagination-container' style="display: none">
                    <nav aria-label="Page navigation tblestados">
                        <ul class="pagination">
                            <li class="page-item" data-page="prev">
                                <a class="page-link" href="#"> Anterior <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="page-item" data-page="next" id="prev">
                                <a class="page-link" href="#"> Proximo <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
