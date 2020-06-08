<div class="modal fade" id="modalCidades" tabindex="-1" role="dialog"
     aria-labelledby="ModalList" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCidades">Cidades</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row d-flex justify-content-center">
                        <div class="col-md-5 col-sm-5">
                            @csrf
                            <label for="pais_filtro">Paises</label>
                            <select id="pais_filtro" name="id_pais"
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
                        <div class="col-md-5 col-sm-5">
                            <label for="estado_filtro">Estados</label>
                            <select id="estado_filtro" name="id_estado"
                                    class="form-control form-control-sm select-find"
                                    style="width: 100%" required>
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <label></label>
                            <button type="submit" id="pesquisarCidade" class="btn btn-primary btn-sm float-left" style="width: 100%">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                </div>
                <table id="tblListaCidade" class="table table-striped table-sm table-hover mt-2">
                    <thead class="thead-light">
                    <tr>
                        <th>Cidades</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr id="listaCidadeNull">
                            <td colspan="3" class="text-center">Sem Registros</td>
                        </tr>
                    </tbody>
                </table>
                @if(isset($cidade))
                @include('dashboard.cidade.delete',['cidade'=>$cidade])
                @endif
            </div>
        </div>
    </div>
</div>

