<div class="modal fade" id="modalNomesBancos" tabindex="-1" role="dialog"
     aria-labelledby="ModalList" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCidades">Bancos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th>Codigo do Banco</th>
                        <th style=>Nome do Banco</th>
                        <th style=></th>
                    </tr>
                    </thead>
                    <tbody>

                    @if( sizeof($bancos) == 0)
                        <tr>
                            <td colspan="3" class="text-center" >Sem Bancos Cadastrados</td>
                        </tr>
                    @else
                        @foreach ($bancos as $banco)

                            <tr>
                                <td>{{$banco->nm_banco}}</td>
                                <td>{{$banco->cd_banco}}</td>
                                <td class=" text-right">
                                    <button type="button" class="btn btn-danger btn-sm ml-1"
                                            data-toggle="modal"
                                            data-target="#modalNomeBancoDel{{$banco->id}}"><i
                                            class='fa fa-trash'></i></button>
                                    @include('dashboard.banco.delete',['banco'=>$banco])

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
