<div class="modal fade" id="frmSelecionarCategoriaModal" tabindex="-1" role="dialog"
     aria-labelledby="frmCategoriaModalLabel"
     aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form id="frmSelecionarCategoria" method="POST">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="frmContatoModalLabel">Selecionar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="msg-sucesso-selcat" class="alert alert-success" role="alert" style="display: none">
                    </div>
                    <div id="msg-erro-selcat" class="alert alert-danger" role="alert" style="display: none">
                    </div>
                    <table id="selecaoCategorias" class="table table-sm table-striped table-hover"
                           style="cursor: pointer">
                        <thead>
                        <tr>
                            <th scope="col">Categorias</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $retorno = new App\Categoria();
                            $categorias = $retorno::all();
                        @endphp

                        @foreach ( $categorias as $categoria)
                            <tr id="cat-{{$categoria->id}}" class="rowCat" data-tipo="cat" data-id="{{$categoria->id}}">
                                <td>{{$categoria->nm_categoria}}</td>
                            </tr>
                            @foreach ($categoria->subCategorias as $subCategoria)
                                <tr id="sub-{{$subCategoria->id}}" class="rowCat" data-tipo="sub"
                                    data-id="{{$subCategoria->id}}">
                                    <td>{{$subCategoria->nm_sub_cat}}</td>
                                </tr>
                            @endforeach

                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
