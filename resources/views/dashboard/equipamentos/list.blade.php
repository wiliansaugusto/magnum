<div class="modal fade" id="modalEquipamentos" tabindex="-1" role="dialog"
     aria-labelledby="EquipamentoList" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEquipamentos">Equipamentos Padrões</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th style="width: 60%">Equipamentos Padrões</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @if( sizeof($equipamentos) == 0)
                        <tr>
                            <td colspan="2" class="text-center" >Sem equipamentos padrões cadastrados</td>
                        </tr>
                    @else
                    @foreach ($equipamentos as $equipamento)

                            <tr>
                                <td>{{$equipamento->ds_campo}}</td>
                                <td class=" text-right">
                                    <button type="button" class="btn btn-warning btn-sm ml-1"
                                            data-toggle="modal"
                                            data-target="#modalEquipamentoUpdate{{$equipamento->id}}"><i
                                            class='fa fa-cog'></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm ml-1"
                                            data-toggle="modal"
                                            data-target="#modalEquipamentoDel{{$equipamento->id}}"><i
                                            class='fa fa-trash'></i>
                                    </button>
                                    @include('dashboard.equipamentos.edit',['equipamento'=>$equipamento])        
                                    @include('dashboard.equipamentos.delete',['equipamento'=>$equipamento])

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
