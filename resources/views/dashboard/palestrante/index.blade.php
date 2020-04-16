@extends('layouts.dashboard')

@section('content')
<div class="card">
    <div class="card-header ">
        <div class="row justify-content-center">
            <div class="col-md-6 sm-12 text-left">
                <h3>Palestrante</h3>
            </div>
            <div class="col-md-6 sm-12 text-right">
                <div class="form-check form-check-inline">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#frmNomePalestranteModal"><i class="fas fa-plus "></i> Adicionar
                        Palestrante
                    </button>
                </div>
            </div>
        </div>

    </div>
    <div class="card-body">
        @include('dashboard.palestrante.edit')

    </div>
</div>


@include('dashboard.palestrante.create')
@include('dashboard.banco.create')
@include('dashboard.endereco.create')
@include('dashboard.assessor.create')
@include('dashboard.categoria.select')
@include('dashboard.contato.create')
@include('dashboard.idiomas.create')

@include('dashboard.descricao.chamada.create')
@include('dashboard.descricao.curriculo.create')
@include('dashboard.descricao.curriculoTecnico.create')
@include('dashboard.descricao.formaPagamento.create')
@include('dashboard.descricao.investimento.create')
@include('dashboard.descricao.equipNecessario.create')
@include('dashboard.descricao.observacao.create')




<script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">

    window.onload = function () {
        tinymce.init({
            selector: 'textarea',
            height: 150,
            language: 'pt_BR',
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code textcolor'
            ],
            toolbar: 'insertfile undo redo | fontselect | fontsizeselect | forecolor | backcolor | quickimage | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
            content_css: '//www.tinymce.com/css/codepen.min.css',
            setup: function (ed) {
                ed.on('keyup', function (e) {
                    e.preventDefault();
                    let count = CountCharacters();
                    let valor = 65550 - count;
                    document.getElementById("character_count").innerHTML = "Caracteres Restante: " + valor;
                });
            }
        });
    };

    /**
     * @return {number}
     */
    function CountCharacters() {
        let body = tinymce.get("txtTinyMCE").getBody();
        let content = tinymce.trim(body.innerText || body.textContent);
        return content.length;
    }
    // function ValidateCharacterLength() {
    //     var max = 65550;
    //     var count = CountCharacters();
    //     if (count > max) {
    //         alert("Você excedeu a quantidade máxima de " + max + " caracteres.")
    //         return false;
    //     }
    //     return;
    // }
</script>

@endsection
