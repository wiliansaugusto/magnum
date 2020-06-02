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

                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th>Estado</th>
                        <th>Pais</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @if( sizeof($estados) == 0)
                        <tr>
                            <td colspan="3" class="text-center" >Sem Estados Cadastradas</td>
                        </tr>
                    @else
                    @foreach ($estados as $estado)

                            <tr>
                                <td>{{$estado->nm_estado}} - {{$estado->ds_sg_estado}}</td>
                                <td class={{$estado->id_pais == null ? 'table-danger' : ''}}>
                                    {{ $estado->id_pais == null ? 'Não Informado'
                                    : $estado->pais->nm_pais }}</td>
                                <td class=" text-right">
                                    <button type="button" class="btn btn-danger btn-sm ml-1"
                                            data-toggle="modal"
                                            data-target="#modalEstadoDel{{$estado->id}}"><i
                                            class='fa fa-trash'></i></button>
                                    @include('dashboard.estado.delete',['estado'=>$estado])

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
