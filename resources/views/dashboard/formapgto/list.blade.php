<div class="modal fade" id="modalFormaPgto" tabindex="-1" role="dialog"
     aria-labelledby="FormaPgtoList" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFormaPgto">Forma de Pagamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th style="width: 60%">Forma de Pagamento</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @if( sizeof($formaPgtos) == 0)
                        <tr>
                            <td colspan="2" class="text-center" >Sem formas de pagamentos cadastrada</td>
                        </tr>
                    @else
                    @foreach ($formaPgtos as $formaPgto)

                            <tr>
                                <td>{{$formaPgto->ds_campo}}</td>
                                <td class=" text-right">
                                    <button type="button" class="btn btn-danger btn-sm ml-1"
                                            data-toggle="modal"
                                            data-target="#modalFormaPgtoDel{{$formaPgto->id}}"><i
                                            class='fa fa-trash'></i></button>
                                    @include('dashboard.formapgto.delete',['formaPgto'=>$formaPgto])

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
