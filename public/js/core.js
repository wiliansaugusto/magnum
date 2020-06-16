$(document).ready(function () {
    var editor, toolbar, tabela;
    //AJAX Request
    $('#frmContatoPalestrante').submit(function (event) {
        event.preventDefault();
        var data = $('#frmContatoPalestrante').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/contato",
            data: data
        }).done(function (data) {
            tabelaContato(data);
            $("#frmContatoPalestrante")[0].reset();
            $('#frmContatoModal').modal('toggle');

        });
    });
    $('#frmBanco').submit(function (event) {
        event.preventDefault();
        var data = $('#frmBanco').serialize() + "&id_palestrante=" + $("#id_palestrante").val()
            + "&nm_banco=" + $("#nm_banco").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/banco/",
            data: data
        }).done(function (data) {
            tabelaBanco(data);
            $("#frmBanco")[0].reset();
            $('#frmBancoModal').modal('toggle');
        });
    });
    $('#frmContatoAcessor').submit(function (event) {
        event.preventDefault();
        var data = $('#frmContatoAcessor').serialize();
        $.ajax({
            method: "POST",
            url: "/dashboard/contato",
            data: data,
            success: function (data) {
                tabelaContatoAcessor(data);
                $("#frmContatoAcessor")[0].reset();
                $('#frmContatoAcessorModal').modal('toggle');
            },
            error: function () {

            }
        });
    });
    $('#frmAssessor').submit(function (event) {
        event.preventDefault();
        var data = $('#frmAssessor').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/assessor",
            data: data,
            success: function (data) {
                tabelaAssessor(data);

                $("#frmAssessor")[0].reset();
                $('#frmAssessorModal').modal('toggle');
            },
            error: function () {
                $('#msg-error-assessor').fadeIn(1000, function () {
                    $(this).delay(3000).fadeOut(500);
                });
            }
        });
    });
    $('#frmDescricao').submit(function (event) {
        event.preventDefault();
        var data = $('#frmDescricao').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        var tipoDescricao = $('#tipo_descricao').val();
        $.ajax({
            method: "POST",
            url: "/dashboard/descricao",
            data: data,
            success: function (data) {
                if (tipoDescricao === "chamada") {
                    tabelDescricao(data, "Chamada", tipoDescricao);
                } else if (tipoDescricao === "curriculo") {
                    tabelDescricao(data, "Currículo Resumido", tipoDescricao);
                } else if (tipoDescricao === "curriculoTec") {
                    tabelDescricao(data, "Currículo Técnico", tipoDescricao);
                } else if (tipoDescricao === "obs") {
                    tabelDescricao(data, "Observações", tipoDescricao);
                }
                $('#frmDescricao')[0].reset();
                $('#frmDescricaoModal').modal('toggle');
            },
            error: function () {
                $('#msg-error-descricao').fadeIn(1000, function () {
                    $(this).delay(3000).fadeOut(500);
                });
            }
        });
    });
    $('#frmEndereco').submit(function (event) {
        event.preventDefault();
        var data = $('#frmEndereco').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/endereco",
            data: data,
            success: function (data) {
                tabelaEndereco(data);
                $("#frmEndereco")[0].reset();
                $('#frmEnderecoModal').modal('toggle');
                $("#nm_endereco").prop('readonly', false);
                $("#nm_bairro").prop('readonly', false);
                $("#nm_cidade").prop('readonly', false);
                $("#nm_estado").prop('readonly', false);
                $("#nr_cep").focus();
            },
            error: function () {
                $('#msg-error-endereco').fadeIn(1000, function () {
                    $(this).delay(3000).fadeOut(500);
                });
            }
        });
    });
    $('#frmValor').submit(function (event) {
        event.preventDefault();
        var data = $('#frmValor').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/valor",
            data: data,
            success: function (data) {
                tabelaValor(data);
                $("#frmValor")[0].reset();
                $('#frmValorModal').modal('toggle');
            },
            error: function () {
                $('#msg-error-valor').fadeIn(1000, function () {
                    $(this).delay(3000).fadeOut(500);
                });
            }
        });
    })
    $("#frmRemoverBanco").submit(function (event) {
        event.preventDefault();

        var id = $('#id_banco').val();
        var data = $('#frmRemoverBanco').serialize();
        $.ajax({
            method: "POST",
            url: "/dashboard/banco/delete/" + id,
            data: data,
            success: function () {
                $('#frmRemoverBancoModal').modal('toggle');
                $('#' + id).remove();
                if ($('#tblBanco tbody tr').length <= 0) {
                    $("#tblBanco tbody ").html('<tr id="banco-null"><td colspan="4" class="text-center"> Nenhum banco registrado</td></tr>');
                }
            },
            error: function () {
                $('#msg-exBanco').fadeIn(1000, function () {
                    $(this).delay(3000).fadeOut(500);
                });
            }
        });
    });
    $("#frmRemoverValor").submit(function (event) {
        event.preventDefault();
        var id = $('#id_valor').val();
        var data = $('#frmRemoverValor').serialize();
        $.ajax({
            method: 'Post',
            url: '/dashboard/valor/delete/' + id,
            data: data,
            success: function () {
                $('#frmRemoverValorModal').modal('toggle');
                $('#tblValor tbody tr#' + id).remove();
                if ($('#tblValor tbody tr').length <= 0) {
                    $("#tblValor tbody ").html('<tr id="valor-null"><td colspan="4" class="text-center"> Nenhum valor registrado</td></tr>');
                }
            },
            error: function () {
                $('#msg-exValor').fadeIn(1000, function () {
                    $(this).delay(3000).fadeOut(500);
                });
            }
        });
    });
    $("#frmRemoverDescricao").submit(function (event) {
        event.preventDefault();
        var tipo = $('#rm_tipo_descricao').val();
        var data = $('#frmRemoverDescricao').serialize() + "&id_palestrante=" + $("#id_palestrante").val() + "&descricao=";
        $.ajax({
            method: 'POST',
            url: '/dashboard/descricao',
            data: data,
            success: function () {
                $('#frmRemoverDescricaoModal').modal('toggle');
                $('#tblDescricao tbody tr#' + tipo).remove();
                if ($('#tblDescricao tbody tr').length <= 0) {
                    $("#tblDescricao tbody ").html('<tr id="descricao-null"><td colspan="3" class="text-center"> Nenhuma descricao registrada</td></tr>');
                }
            },
            error: function () {
                $('#msg-exDescricao').fadeIn(1000, function () {
                    $(this).delay(3000).fadeOut(500);
                });
            }
        });
    });
    $("#frmRemoverContato").submit(function (event) {
        event.preventDefault();
        var data = $('#frmRemoverContato').serialize();
        var id = $('#id_contato').val();
        $.ajax({
            method: 'POST',
            url: '/dashboard/contato/delete/' + id,
            data: data,
            success: function () {
                $('#frmRemoverContatoModal').modal('toggle');
                $('#contato-' + id).remove();
                if ($('#tblContato tbody tr').length <= 0) {
                    $("#tblContato tbody ").html('<tr id="contato-null"><td colspan="3" class="text-center">Nenhum contato registrado</td></tr>');
                }
                if ($('#assessor-contato-null tbody tr').length <= 0) {
                    $("#assessor-contato-null tbody ").html('<tr id="assessor-null"><td colspan="3" class="text-center">Nenhum contato registrado</td></tr>');
                }
                if ($('#tblContatoAssessor tbody tr').length <= 0) {
                    $("#tblContatoAssessor tbody ").html('<tr id="contato-assessor-null"><td colspan="3" class="text-center">Nenhum contato registrado</td></tr>');
                }
            },
            error: function () {
                $('#msg-exContato').fadeIn(1000, function () {
                    $(this).delay(3000).fadeOut(500);
                });
            }
        });
    });
    $("#frmRemoverEndereco").submit(function (event) {
        event.preventDefault();
        var data = $('#frmRemoverEndereco').serialize();
        var id = $('#id_endereco').val();

        $.ajax({
            method: 'POST',
            url: '/dashboard/endereco/delete/' + id,
            data: data,
            success: function () {
                $('#frmRemoverEnderecoModal').modal('toggle');
                $('#endereco-' + id).remove();

                if ($('#tblEndereco tbody tr').length <= 0) {
                    $("#tblEndereco tbody ").html('<tr id="endereco-null"><td colspan="3" class="text-center">Nenhum endereço registrado</td></tr>');
                }
            },

            error: function () {
                $('#msg-exEndereco').fadeIn(1000, function () {
                    $(this).delay(3000).fadeOut(500);
                });
            }
        });
    });

    $("#frmRemoverAssessor").submit(function (event) {
        event.preventDefault();

        var id = $('#id_assessor').val();
        var data = $('#frmRemoverAssessor').serialize();
        $.ajax({
            method: "POST",
            url: "/dashboard/assessor/delete/" + id,
            data: data,
            success: function () {
                debugger;
                $('#frmRemoverAssessorModal').modal('toggle');
                $('#painel-assessor-' + id).remove();
                if ($('#accordion-assessor div.panel').length <= 0) {
                    $("#accordion-assessor").html('<table class="table table-sm table-striped" id="tblAssessor">' +
                        '<tr id="assesssor-null">' +
                        '<td colspan="2" class="text-center">Nenhum assessor registrado' +
                        '</td>' +
                        '</tr>' +
                        '</table>');
                }
            },
            error: function () {
                $('#msg-exAssessor').fadeIn(1000, function () {
                    $(this).delay(3000).fadeOut(500);
                });
            }
        });
    });
    //Busca de CEP
    $("#nr_cep").focusout(function () {
        $.ajax({
            url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
            dataType: 'json',
            success: function (resposta) {
                if (resposta.erro === true) {
                    $('#nr_cep').addClass('is-invalid');
                    $("#nm_endereco").prop('readonly', false);
                    $("#nm_bairro").prop('readonly', false);
                    $("#nm_cidade").prop('readonly', false);
                    $("#nm_estado").prop('readonly', false);
                    $("#nr_cep").focus();

                    $("#nm_endereco").val("");
                    $("#ds_complemento").val("");
                    $("#nm_bairro").val("");
                    $("#nm_cidade").val("");
                    $("#nm_estado").val("");

                } else {

                    $('#nr_cep').removeClass('is-invalid');
                    $("#nm_endereco").prop('readonly', true);
                    $("#nm_bairro").prop('readonly', true);
                    $("#nm_cidade").prop('readonly', true);
                    $("#nm_estado").prop('readonly', true);
                    $("#nm_endereco").val(resposta.logradouro);
                    $("#ds_complemento").val(resposta.complemento);
                    $("#nm_bairro").val(resposta.bairro);
                    $("#nm_cidade").val(resposta.localidade);
                    $("#nm_estado").val(resposta.uf);
                    $("#nr_endereco").focus();
                }
            }
        });
    });

    //Preencimento das tabelas
    function tabelaBanco(fields) {
        $("#banco-null").remove();

        var linha = "<tr id='" + fields.id_banco + "'>";
        linha += "<td>" + fields.nm_banco + "</td>";
        linha += "<td>" + fields.nr_agencia + "</td>";
        linha += "<td>" + fields.nr_conta + "</td>";
        linha += "<td class='text-right'>";
        linha += "<button id='excluirBanco' type='button' class='btn btn-danger btn-sm' data-id='" + fields.id_banco + "' data-toggle='modal' data-target='#frmRemoverBancoModal'><i class='fa fa-trash'></i></button>";
        linha += "</td>";
        linha += "</tr>";

        $("#tblBanco tbody ").append(linha);
    }

    function tabelaContatoAcessor(fields) {
        $("#contato-assessor-null").remove();

        var linha = "<tr id='contato-" + fields.id_contato + "'>";
        linha += "<td>" + fields.nm_tipo_contato + "</td>";
        linha += "<td>" + fields.ds_contato + "</td>";
        linha += "<td class='text-right'>";
        linha += "<button id='excluirContatoAssessor' type='button' class='btn btn-danger btn-sm' data-id='" + fields.id_contato + "' data-toggle='modal' data-target='#frmRemoverContatoModal'>";
        linha += "<i class='fa fa-trash'></i>";
        linha += "</button>";
        linha += "</td>";
        linha += "<input type='hidden' name='id_contato[]' value='" + fields.id_contato + "' />";
        linha += "</tr>";

        $("#tblContatoAssessor tbody ").append(linha);
    }

    function tabelaContato(fields) {
        $("#contato-null").remove();

        var linha = "<tr id='contato-" + fields.id_contato + "'>";
        linha += "<td><input type='hidden' name='id_contato[]' value='" + fields.id_contato + "' />";
        linha += fields.nm_tipo_contato + "</td>";
        linha += "<td>" + fields.ds_contato + "</td>";
        linha += "<td class='text-right'>";
        linha += "<button id='excluirContato' type='button' class='btn btn-danger btn-sm' data-id='" + fields.id_contato + "' data-toggle='modal' data-target='#frmRemoverContatoModal'>";
        linha += "<i class='fa fa-trash'></i>";
        linha += "</button>";
        linha += "</td>";
        linha += "</tr>";

        $("#tblContato tbody ").append(linha);
    }

    function tabelaAssessor(fields) {
        $("#tblContatoAssessor tbody ").html('<tr id="contato-assessor-null"><td colspan="3" class="text-center"> Nenhum contato registrado</td></tr>');
        $("#tblAssessor").remove();

        var linha = '<div class="panel" id="painel-assessor-' + fields.id + '">';
        linha += '<div class="panel-heading">';
        linha += '<div class="col-md-11 mt-1">';
        linha += '<a role="tab" id="heading-' + fields.id + '" data-toggle="collapse" data-parent="#accordion-assessor" href="#collapseAssessor-' + fields.id + '" aria-expanded="true" aria-controls="collapseAssessor-' + fields.id + '">';
        linha += '<h4 class="panel-title">' + fields.nm_acessor + '</h4>';
        linha += '</a>';
        linha += '</div>';
        linha += '<div class="col-md-1">';
        linha += '<button id="excluirAssessor" type="button" class="btn btn-danger btn-sm" data-id="' + fields.id + '" data-toggle="modal" data-target="#frmRemoverAssessorModal">';
        linha += '<i class="fa fa-trash"></i>';
        linha += '</button>';
        linha += '</div>';
        linha += '<div class="clearfix"></div>';
        linha += '</div>';
        linha += '<div id="collapseAssessor-' + fields.id + '" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-' + fields.id + '">';
        linha += '<div class="panel-body p-3">';
        linha += '<table id="assessor-contato" class="table table-sm table-striped">';
        linha += '<thead>';
        linha += '<tr>';
        linha += '<th>Tipo de Contato</th>';
        linha += '<th>Contato</th>';
        linha += '<th></th>';
        linha += '</tr>';
        linha += '</thead>';
        linha += '<tbody>';
        if (fields.contatos.length > 0) {
            for (var i = 0; i < fields.contatos.length; i++) {
                console.log(fields.contatos[i]);
                linha += '<tr id="contato-' + fields.contatos[i].id_contato + '">';
                linha += '<td>' + fields.contatos[i].nm_tipo_contato + '</td>';
                linha += '<td>' + fields.contatos[i].ds_contato + '</td>';
                linha += '<td class="text-right">'
                linha += '<button id="excluirContato" type="button" class="btn btn-danger btn-sm" data-id="' + fields.contatos[i].id_contato + '" data-toggle="modal" data-target="#frmRemoverContatoModal">';
                linha += '<i class="fa fa-trash"></i>';
                linha += '</button>';
                linha += '</td>';
                linha += '</tr>';
            }
        } else {
            linha += '<tr id="assesssor-contato-null">';
            linha += '<td colspan="2" class="text-center">Nenhum contato registrado</td>';
            linha += '</tr>';
        }
        linha += '</tbody>';
        linha += '</table>';
        linha += '</div>';
        linha += '</div>';
        linha += '</div>';

        $("#accordion-assessor").append(linha);
    }

    function tabelaValor(fields) {
        $("#valor-null").remove();
        var obs = fields.ds_observacao === null ? "Não Cadastrado" : fields.ds_observacao;
        var linha = "<tr id='" + fields.id_valor + "'>";
        linha += "<td>" + fields.nm_cidade + "</td>";
        linha += "<td>" + fields.nr_valor + "</td>";
        linha += "<td>" + obs + "</td>";
        linha += "<td>" + fields.nm_tipo_servico + "</td>";
        linha += "<td class='text-right'>";
        linha += "<button id='excluirValor' type='button' class='btn btn-danger btn-sm' data-id='" + fields.id_valor + "' data-toggle='modal' data-target='#frmRemoverValorModal'>";
        linha += "<i class='fa fa-trash'></i>";
        linha += "</button>";
        linha += "</td>";
        linha += "</tr>";

        $("#tblValor tbody ").append(linha);
    }

    function tabelDescricao(fields, tipo, campo) {
        $("#descricao-null").remove();
        $("#" + campo).remove();
        var linha = "<tr id='" + campo + "'>";
        linha += "<td>" + tipo + "</td>";
        linha += "<td class='text-truncate'>" + fields.descricao.replace(/(<([^>]+)>)/ig, "") + "</td>";
        linha += "<td class='text-right'>";
        linha += "<button id='excluirDescricao' type='button' class='btn btn-danger btn-sm' data-tipo='" + campo + "' data-toggle='modal' data-target='#frmRemoverDescricaoModal'>";
        linha += "<i class='fa fa-trash'></i>";
        linha += "</button>";
        linha += "</td>";
        linha += "</tr>";

        $("#tblDescricao tbody ").append(linha);

    }

    function tabelaEndereco(fields) {
        debugger;
        if(fields.registro == 'palestrantre') {
            $("#endereco-null-palestrante").remove();

            var linha = "<tr id='endereco-" + fields.id_endereco + "'>";
            linha += "<td>" + fields.tipo_endereco + "</td>";
            linha += "<td>" + fields.endereco + "</td>";
            linha += "<td class='text-right'>";
            linha += "<button id='excluirEndereco-" + fields.id_endereco + "' type='button' class='btn btn-danger btn-sm' data-id='" + fields.id_endereco + "' data-toggle='modal' data-target='#frmRemoverEnderecoModal'>";
            linha += "<i class='fa fa-trash'></i>";
            linha += "</button>";
            linha += "</td>";
            linha += "</tr>";

            $("#tblEnderecoPalestrante tbody ").append(linha);

        }else if(fields.registro == 'palestrantre') {
            $("#endereco-null-contratual").remove();

            var linha = "<tr id='endereco-" + fields.id_endereco + "'>";
            linha += "<td>" + fields.tipo_endereco + "</td>";
            linha += "<td>" + fields.endereco + "</td>";
            linha += "<td class='text-right'>";
            linha += "<button id='excluirEndereco-" + fields.id_endereco + "' type='button' class='btn btn-danger btn-sm' data-id='" + fields.id_endereco + "' data-toggle='modal' data-target='#frmRemoverEnderecoModal'>";
            linha += "<i class='fa fa-trash'></i>";
            linha += "</button>";
            linha += "</td>";
            linha += "</tr>";

            $("#tblEnderecoContratual tbody ").append(linha);
        }else{
            return;
        }
    }

    //validação de campos
    $(document).on('keypress', '#ins_municipal', function (e) {
        var key = (window.event) ? event.keyCode : e.which;
        if ((key > 47 && key < 58)) {
            return true;
        } else {
            return (key == 8 || key == 0) ? true : false;

        }
    });
    $(document).on('keypress', '#ins_estadual', function (e) {
        var key = (window.event) ? event.keyCode : e.which;
        if ((key > 47 && key < 58)) {
            return true;
        } else {
            return (key == 8 || key == 0) ? true : false;

        }
    });
    $(document).on("input", ".ds_chamada", function () {
        var limite = 300;
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        $("#cont-char span").text(caracteresRestantes);
    });

//    EVENTOS DE CLICK
    $(".close-alert").click(function () {
        $(this).closest('.alert').fadeOut();
    });

    $("#ds_reset").click(function () {
        $(".simditor-body").html("");
    });

    //Select2
    $('.select-find').select2({
        placeholder: "Buscar",
    });

    $("select[name='id_pais']").change(function () {
        let id_pais = $(this).val();
        let selecEstado = $("select[name='id_estado']");
        $.ajax({
            method: "GET",
            url: "/dashboard/estado/buscar/" + id_pais,
            success: function (data) {
                selecEstado.html("<option></option>")
                data.forEach(function (estado) {
                    selecEstado.append('<option value="' + estado.id + '">' + estado.nm_estado + '</option>');
                });
            }
        });
    })
    $("select[name='id_estado']").change(function () {
        let id_estado = $(this).val();
        let selecCidade = $("select[name='id_cidade']");

        $.ajax({
            method: "GET",
            url: "/dashboard/cidade/buscaPorEstado/" + id_estado,
            success: function (data) {
                selecCidade.html("<option></option>")

                data.forEach(function (cidade) {
                    selecCidade.append('<option value="' + cidade.id + '">' + cidade.nm_cidade + '</option>');

                });
            }
        });
    });
    $("#pesquisarCidade").click(function () {

        let id_estado = $("#estado_filtro").val();
        let tblCidade = $("#tblListaCidade tbody");
        $.ajax({
            method: "GET",
            url: "/dashboard/cidade/buscaPorEstado/" + id_estado,
            success: function (data) {
                tblCidade.html("");
                data.forEach(function (cidade) {
                    tblCidade.append('<tr id="' + cidade.id + '"><td>' + cidade.nm_cidade + '</td>' +
                        '<td class="text-right">' +
                        '<button class="btn btn-sm btn-primary" data-id="' + cidade.id + '" data-cidade="' + cidade.nm_cidade + '" data-estado="' + cidade.id_estado + '" data-toggle="modal" data-target="#frmCidadeEditModal">' +
                        '<i class="fa fa-edit"></i>' +
                        '</button>' +
                        '</td></tr>');
                });
                getPagination("#tblListaCidade");
                $("#regLinha").show();
                $("#pgList").show();
            }
        });
    });
    $("#pesquisarEstado").click(function () {

        let id_pais = $("#pais_filtro_estado").val();
        let tblEstado = $("#tblListaEstado tbody");
        $.ajax({
            method: "GET",
            url: "/dashboard/estado/buscar/" + id_pais,
            success: function (data) {
                console.log(data);
                debugger;
                tblEstado.html("");

                data.forEach(function (estado) {
                    tblEstado.append('<tr id="' + estado.id + '"><td>' + estado.nm_estado + '</td>' +
                        '<td class="text-right">' +
                        '<button class="btn btn-sm btn-primary" data-id="' + estado.id + '" data-estado="' + estado.nm_estado + '" data-pais="' + estado.id_pais + '" data-toggle="modal" data-target="#frmEstadoEditModal">' +
                        '<i class="fa fa-edit"></i>' +
                        '</button>' +
                        '</td></tr>');
                });
                getPagination("#tblListaEstado");
                if (data.length <= 0) {
                    $("#regLinhaEstado").hide();
                    $("#pgListEstado").hide();
                } else {
                    $("#regLinhaEstado").show();
                    $("#pgListEstado").show();
                }
            }
        });
    });

//MASK
    $('#nr_valor').mask('#.##0,00', {reverse: true});

//Enventos de Modal
    $('#frmDescricaoModal').on('show.bs.modal', function (event) {
        var modal = $(this);
        var button = $(event.relatedTarget);
        var id = $("#id_palestrante").val();
        var tipo = button.data('tipo');
        var titulo = button.data('titulo');
        var label = button.data('label');
        var limit = button.data('limit');

        $("#tipo_descricao").val(tipo);
        $("#tituloDescricaoModal").text(titulo);

        if (limit) {
            $("#chrCont").css("display", "block");
            $("#text-editor").html("");
            $("#text-editor").html("<textarea id='ds_chamada' class='form-control ds_chamada' name='descricao'" +
                "                                    rows='4' maxlength='300'></textarea>");
        } else {
            $("#chrCont").css("display", "none");

            $("#text-editor").html("");
            $("#text-editor").html("<textarea class='form-control editor' name='descricao'" +
                "rows='4'></textarea>");

            Simditor.locale = 'pt-BR';
            toolbar = ['bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul',
                'blockquote', 'table', '|', 'indent', 'outdent', 'alignment'];

            editor = new Simditor({
                textarea: $('.editor'),
                placeholder: '',
                toolbar: toolbar,
                pasteImage: false,
                upload: false
            });
            editor.setValue("");
        }

        if (tipo !== undefined) {
            var data = $("#frmDescricao").serialize() + "&id_palestrante=" + id;
            $.ajax({
                method: "POST",
                url: "/dashboard/descricao/conteudo",
                data: data,
                success: function (data) {
                    var cont = 300;
                    if (tipo == "chamada") {
                        $('textarea[name="descricao"]').val(data.descricao);
                        if (data.descricao.length > 0) {
                            cont = cont - data.descricao.length;
                        }
                    } else {
                        editor.setValue(data.descricao);
                    }
                    $("#cont-char span").text(cont);
                }
            });
        }
    });
    $('#frmEnderecoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var rel = button.data('rel')
        var modal = $(this)
        modal.find('.modal-body input[name="id_relacao"]').val(rel)
    });
    $('#frmEstadoEditModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var nm_estado = button.data('estado')
        var id_pais = button.data('pais')
        var modal = $(this)

        modal.find('.modal-body input[name="id"]').val(id)
        modal.find('.modal-body input[name="nm_estado"]').val(nm_estado)
        modal.find('.modal-body input[name="id_pais"]').val(id_pais)
    });
    $('#frmEnderecoModal').on('show.bs.modal', function (event) {
        $("#select2-id_pais-container").html('<span class="select2-selection__placeholder">Buscar</span>');
        $("#select2-id_estado-container").html('<span class="select2-selection__placeholder">Buscar</span>');
        $("#select2-id_cidade-container").html('<span class="select2-selection__placeholder">Buscar</span>');
    });
    $('#modalEstados').on('show.bs.modal', function (event) {
        let tblEstado = $("#tblListaEstado tbody");
        tblEstado.html("");
        $("#regLinhaEstado").hide();
        $("#pgListEstado").hide();
        $("#select2-pais_filtro_estado-container").html('<span class="select2-selection__placeholder">Buscar</span>');
    });
    $('#frmCidadeEditModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var nm_cidade = button.data('cidade')
        var id_estado = button.data('estado')
        var modal = $(this)

        modal.find('.modal-body input[name="id"]').val(id)
        modal.find('.modal-body input[name="nm_cidade"]').val(nm_cidade)
        modal.find('.modal-body input[name="id_estado"]').val(id_estado)
    });
    $('#frmRemoverBancoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('id')
        var modal = $(this)
        modal.find('.modal-body input[name="id_banco"]').val(recipient)
    });
    $('#frmRemoverValorModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('id')
        var modal = $(this)
        modal.find('.modal-body input[name="id_valor"]').val(recipient)
    });
    $('#frmRemoverDescricaoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('tipo')
        var modal = $(this)
        modal.find('.modal-body input[name="tipo_descricao"]').val(recipient)
    });
    $('#frmRemoverContatoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('id')
        var modal = $(this)
        modal.find('.modal-body input[name="id"]').val(recipient)
    });
    $('#frmRemoverEnderecoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('id')
        var rel = button.data('rel')
        var modal = $(this)
        modal.find('.modal-body input[name="id"]').val(recipient)
        modal.find('.modal-body input[name="rel"]').val(rel)
    });
    $('#frmRemoverAssessorModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('id')
        var modal = $(this)
        modal.find('.modal-body input[name="id"]').val(recipient)
    });

// //envio de imagem
    $("#ds_foto").change(function () {
        const file = $(this)[0].files[0];
        const fileReader = new FileReader();

        var ext = $('#ds_foto').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['png', 'jpg', 'jpeg']) == -1) {
            $("#imgFoto").fadeOut(500);
            $(".custom-upload-foto").html("<i class=\"fa fa-cloud-upload\"></i> Carregar Foto");
            $("#imgFoto").attr('src', window.location.protocol + "//" + window.location.hostname + ":" + window.location.port + "/img/no-image.png");
            $("#imgFoto").fadeIn(500);
            $('#file_invalid').fadeIn(500);
        } else {
            fileReader.onloadend = function () {
                $("#imgFoto").fadeOut(500);
                $("#imgFoto").removeAttr('src');
                $("#imgFoto").attr('src', fileReader.result);
                $("#imgFoto").fadeIn(500);
                $('#file_invalid').fadeOut(500);
            }
            $(".custom-upload-foto").html("<i class=\"fa fa-cloud-upload\"></i> " + file.name);
            fileReader.readAsDataURL(file);
        }
    });

})
;

