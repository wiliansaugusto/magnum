<div class="modal fade" id="modalTipoServicos" tabindex="-1" role="dialog"
     aria-labelledby="TipoServicoList" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTipoServico">Tipos de Serviços</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th style="width: 60%">Tipo de Serviço</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @if( sizeof($tipos) == 0)
                        <tr>
                            <td colspan="2" class="text-center" >Sem Tipos de Serviços Cadastrados</td>
                        </tr>
                    @else
                    @foreach ($tipos as $tipo)

                            <tr>
                                <td>{{$tipo->nm_tipo_servico}}</td>
                                <td class=" text-right">
                                    <button type="button" class="btn btn-danger btn-sm ml-1"
                                            data-toggle="modal"
                                            data-target="#modalTipoServDel{{$tipo->id}}"><i
                                            class='fa fa-trash'></i></button>
                                    @include('dashboard.tipoServico.delete',['tipo'=>$tipo])

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
