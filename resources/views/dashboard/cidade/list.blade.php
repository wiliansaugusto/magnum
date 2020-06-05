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

                <table class="table table-striped table-sm table-hover " hidden>
                    <thead class="thead-light">
                    <tr>
                        <th>Cidades</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @if( sizeof($cidades) == 0)
                        <tr>
                            <td colspan="3" class="text-center">Sem Cidades Cadastradas</td>
                        </tr>
                    @else
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-md-10 col-sm-10">
                                    <form id="estadoList" >
                                        @csrf
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <label for="pais">Paises</label>
                                    <select id="pais" name="nm_pais" class="form-control form-control-sm select-find"
                                            style="width: 100%" required>
                                        <option selected disabled>Seleciona Pais</option>
                                        @foreach ($paises= App\Pais::All() as $pais)
                                            <option class="form-control form-control-sm"
                                                    value="{{$pais->id}}">
                                                {{$pais->nm_pais}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <button type="button" id="pesquisarPais" class="btn btn-primary btn-sm float-left" style="width: 100%">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                                </div>
                    @endif
                    </form>

                            <div class="form-group row d-flex justify-content-center" id="estadoResp">

                            </div>
                            <div class="form-group row d-flex justify-content-center" id="cidadesResp">
                            </div>

                    </tbody>
                </table>
                @if(isset($cidade))
                @include('dashboard.cidade.delete',['cidade'=>$cidade])
                @endif
            </div>
        </div>
    </div>
</div>

