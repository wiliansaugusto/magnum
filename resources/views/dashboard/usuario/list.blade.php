<div class="modal fade" id="modalUsuarios" tabindex="-1" role="dialog"
     aria-labelledby="UsuarioLIst" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUsuario">Usuarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th style="width: 60%">Nome do Usuario</th>
                        <th>Data da Criação</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->nm_usuario}}</td>
                            <td>{{date_format($usuario->created_at,"d/m/Y H:i:s")}}</td>
                            <td class=" text-right">
                                <button type="button" class="btn btn-danger btn-sm ml-1"
                                        data-toggle="modal"
                                        data-target="#modalUsuarioeDel{{$usuario->id}}"><i
                                            class='fa fa-trash'></i></button>
                                @include('dashboard.usuario.delete',['usuario'=>$usuario])
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>