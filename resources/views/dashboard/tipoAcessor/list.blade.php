<div class="modal fade" id="modalTipoAcessor" tabindex="-1" role="dialog"
     aria-labelledby="TipoAcessorList" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTipoAcessor">Tipos de Assessor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th style="width: 60%">Tipo de Assessor</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @if( sizeof($acessores) == 0)
                        <tr>
                            <td colspan="2" class="text-center" >Sem Tipos de Assessores Cadastrados</td>
                        </tr>
                    @else
                    @foreach ($acessores as $acessor)

                            <tr>
                                <td>{{$acessor->nm_tp_acessor}}</td>
                                <td class=" text-right">
                                    <button type="button" class="btn btn-warning btn-sm ml-1"
                                            data-toggle="modal"
                                            data-target="#modalTipoAcessorUpdate{{$acessor->id}}"><i
                                            class='fa fa-cog'></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm ml-1"
                                            data-toggle="modal"
                                            data-target="#modalTipoAcessorDel{{$acessor->id}}"><i
                                            class='fa fa-trash'></i>
                                    </button>
                                    @include('dashboard.tipoAcessor.edit',['acessor'=>$acessor])
                                    @include('dashboard.tipoAcessor.delete',['acessor'=>$acessor])

                                </td>
                            </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
