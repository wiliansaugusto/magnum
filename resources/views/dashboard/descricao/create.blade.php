<div class="modal fade" id="frmDescricaoModal" tabindex="-1" role="dialog" aria-labelledby="frmDescricaoModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="frmDescricaoModalLabel">Cadastrar Descrições</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row d-flex justify-content-center  text-center">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" data-toggle="modal"
                            data-target="#frmChamadaModal">
                            Chamada
                        </button>
                        <button type="submit" class="btn btn-primary" data-toggle="modal"
                            data-target="#frmCurriculoModal">
                            Currículo
                        </button>
                        <button type="submit" class="btn btn-primary" data-toggle="modal"
                        data-target="#frmCurriculoTecModal">
                            Currículo Técnico
                        </button>
                        <button type="submit" class="btn btn-primary" data-toggle="modal"
                        data-target="#frmFormaPagamentoModal">
                            Forma de Pagamento
                        </button>
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-center text-center">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" data-toggle="modal"
                        data-target="#frmInvestimentoModal">
                            Investimento
                        </button>
                        <button type="submit" class="btn btn-primary" data-toggle="modal"
                        data-target="#frmEquipamentoModal">
                            Equipamentos Necessários
                        </button>
                        <button type="submit" class="btn btn-primary"
                                data-target="#frmObservacaoModal">
                            Observações
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.chamada.create')
@include('dashboard.curriculo.create')
@include('dashboard.curriculoTecnico.create')
@include('dashboard.formaPagamento.create')
@include('dashboard.investimento.create')
@include('dashboard.equipNecessario.create')
@include('dashboard.observacao.create')


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