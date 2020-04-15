<div class="modal fade" id="frmSelecionarCategoriaModal" tabindex="-1" role="dialog" aria-labelledby="frmCategoriaModalLabel"
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
                    <table id="selecaoCategorias" class="table table-sm table-striped table-hover" style="cursor: pointer">
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
                                <tr id="cat-{{$categoria->id}}" onclick="selecionarCategoria({{$categoria->id}}, 'cat');">
                                    <td>{{$categoria->nm_categoria}}</td>
                                </tr>
                                    @foreach ($categoria->subCategorias as $subCategoria)
                                        <tr id="sub-{{$subCategoria->id}}" onClick="selecionarCategoria({{$subCategoria->id}}, 'sub');">
                                            <td>{{$subCategoria->nm_sub_cat}}</td>
                                        </tr>
                                    @endforeach

                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                    <button type="reset" class="btn btn-warning">
                        Limpar
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function selecionarCategoria(id, tipo){
        var data = $('#frmObs').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        if(tipo == "cat") {
            data = data + "&id_categoria=" + id;
        }else{
            data = data + "&id_subcategoria=" + id;
        }

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        xhttp.open("POST", "/dashboard/palestrante/adicionarcategoria", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(data);
        // $.ajax({
        //     url: '/dashboard/palestrante/adicionarcategoria',
        //     method: "POST",
        //     data: data,
        //     success: function(resposta){
        //     }
        // });
        //
        // $('#' + tipo + '-' + id).remove();
    }
</script>