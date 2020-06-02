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

                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th >Cidades</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @if( sizeof($cidades) == 0)
                        <tr>
                            <td colspan="3" class="text-center" >Sem Cidades Cadastradas</td>
                        </tr>
                    @else
                    @foreach ($cidades as $cidade)

                            <tr>
                                <td>{{$cidade->nm_cidade}}</td>
                                <td class={{$cidade->id_estado == null ? 'table-danger' : ''}}>
                                    {{ $cidade->id_estado == null ? 'Não Informado'
                                    : $cidade->estado->nm_estado }}</td>
                                <td class=" text-right">
                                    <button type="button" class="btn btn-danger btn-sm ml-1"
                                            data-toggle="modal"
                                            data-target="#modalCidadeDel{{$cidade->id}}"><i
                                            class='fa fa-trash'></i></button>
                                    @include('dashboard.cidade.delete',['cidade'=>$cidade])

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
