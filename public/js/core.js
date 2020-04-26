$(document).ready(function () {
 
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
            url: "/dashboard/assessor/",
            data: data,
            success: function (data) {
                tabelaAssessor(data);
                $("#frmAssessor")[0].reset();
                $('#frmAssessorModal').modal('toggle');
            },
            error: function () {

            }
        });
    });
    $('#frmChamada').submit(function (event) {
        event.preventDefault();
        var data = $('#frmChamada').serialize() + "&id_palestrante=" + $("#id_palestrante").val() + "&tipo_descricao=chamada";
        $.ajax({
            method: "POST",
            url: "/dashboard/descricao/",
            data: data
        }).done(function (data) {
            tabelDescricao(data, "Chamada", "chamada");
            $('#frmChamada')[0].reset();
            $('#frmChamadaModal').modal('toggle');
        });
    });
    $('#frmCurriculo').submit(function (event) {
        event.preventDefault();
        var data = $('#frmCurriculo').serialize() + "&id_palestrante=" + $("#id_palestrante").val() + "&tipo_descricao=curriculo";
        $.ajax({
            method: "POST",
            url: "/dashboard/descricao/",
            data: data
        }).done(function (data) {
            tabelDescricao(data, "Currículo Resumido", "curriculo");
            $('#frmCurriculo')[0].reset();
            $('#frmCurriculoModal').modal('toggle');
        });
    });
    $('#frmCurriculoTec').submit(function (event) {
        event.preventDefault();
        var data = $('#frmCurriculoTec').serialize() + "&id_palestrante=" + $("#id_palestrante").val() + "&tipo_descricao=curriculoTec";
        $.ajax({
            method: "POST",
            url: "/dashboard/descricao/",
            data: data
        }).done(function (data) {
            tabelDescricao(data, "Currículo Tecnico", "curriculoTec");
            $('#frmCurriculoTec')[0].reset();
            $('#frmCurriculoTecModal').modal('toggle');
        });
    });
    $('#frmEquip').submit(function (event) {
        event.preventDefault();
        var data = $('#frmEquip').serialize() + "&id_palestrante=" + $("#id_palestrante").val() + "&tipo_descricao=equipamento";
        $.ajax({
            method: "POST",
            url: "/dashboard/descricao/",
            data: data
        }).done(function (data) {
            tabelDescricao(data, "Equipamento Necessário", "equipamento");
            $('#frmEquip')[0].reset();
            $('#frmEquipamentoModal').modal('toggle');
        });
    });
    $('#frmFormaPagamento').submit(function (event) {

        event.preventDefault();
        var data = $('#frmFormaPagamento').serialize() + "&id_palestrante=" + $("#id_palestrante").val() + "&tipo_descricao=pgto";
        $.ajax({
            method: "POST",
            url: "/dashboard/descricao/",
            data: data
        }).done(function (data) {
            tabelDescricao(data, "Forma de Pagamento", "pgto");
            $('#frmFormaPagamento')[0].reset();
            $('#frmFormaPagamentoModal').modal('toggle');
        });
    });
    $('#frmInvestimento').submit(function (event) {
        event.preventDefault();
        var data = $('#frmInvestimento').serialize() + "&id_palestrante=" + $("#id_palestrante").val() + "&tipo_descricao=investimento";
        $.ajax({
            method: "POST",
            url: "/dashboard/descricao/",
            data: data
        }).done(function (data) {
            tabelDescricao(data, "Investimento", "investimento");
            $('#frmInvestimento')[0].reset();
            $('#frmInvestimentoModal').modal('toggle');
        });
    });
    $('#frmObs').submit(function (event) {
        event.preventDefault();
        var data = $('#frmObs').serialize() + "&id_palestrante=" + $("#id_palestrante").val() + "&tipo_descricao=obs";
        $.ajax({
            method: "POST",
            url: "/dashboard/descricao/",
            data: data
        }).done(function (data) {
            tabelDescricao(data, "Observações", "obs");
            $('#frmObs')[0].reset();
            $('#frmObservacaoModal').modal('toggle');
        });
    });
    $('#frmEnderecoPalestrante').submit(function (event) {
        event.preventDefault();
        var data = $('#frmEnderecoPalestrante').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/endereco",
            data: data,
            success: function (data) {
                tabelaEnderecoPalestrante(data);
                $("#frmEnderecoPalestrante")[0].reset();
                $('#frmEnderecoPalestranteModal').modal('toggle');
                $("#nm_endereco").prop('readonly', false);
                $("#nm_bairro").prop('readonly', false);
                $("#nm_cidade").prop('readonly', false);
                $("#nm_estado").prop('readonly', false);
                $("#nr_cep").focus();
            },
            error: function () {
                //TODO adicionar mensagem de falha no cadastro de endereço
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
                    $("#tblBanco tbody ").html('<tr id="banco-null"><td colspan="3" class="text-center"> Nenhum banco registrado</td></tr>');
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
                $('#' + id).remove();
                if ($('#tblValor tbody tr').length <= 0) {
                    $("#tblValor tbody ").html('<tr id="valor-null"><td colspan="3" class="text-center"> Nenhum valor registrado</td></tr>');
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
        var tipo = $('#tipo_descricao').val();
        var data = $('#frmRemoverDescricao').serialize() + "&id_palestrante=" + $("#id_palestrante").val() + "&descricao=";
        $.ajax({
            method: 'POST',
            url: '/dashboard/descricao',
            data: data,
            success: function () {
                $('#frmRemoverDescricaoModal').modal('toggle');
                $('#' + tipo).remove();
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
                    $("#tblContato tbody ").html('<tr id="contato-assessor-null"><td colspan="3" class="text-center">Nenhum contato registrado</td></tr>');
                }
                if ($('#tblContatoAssessor tbody tr').length <= 0) {
                    $("#tblContatoAssessor tbody ").html('<tr id="contato-assessor-null"><td colspan="3" class="text-center">Nenhum contato registrado</td></tr>');
                }
            },
            error: function () {
                $('#msg-exDescricao').fadeIn(1000, function () {
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
                $("#tblEnderecoPalestrante tbody ").html('<tr id="endereco-null"><td colspan="3" class="text-center">Nenhum endereço registrado</td></tr>');
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
                $('#frmRemoverAssessorModal').modal('toggle');
                $('#' + id).remove();
                if ($('#tblAssessor tbody tr').length <= 0) {
                    $("#tblAssessor tbody ").html('<tr id="assessor-null"><td colspan="3" class="text-center"> Nenhum Assessor registrado</td></tr>');
                    
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

    // //envio de imagem
    // $("#ds_foto").change(function () {
    //     const file = $(this)[0].files[0];
    //     const fileReader = new FileReader();
    //     fileReader.onloadend = function () {
    //         $("#imgFoto").fadeIn(500);
    //         $("#imgFoto").attr('src', fileReader.result);
    //     }
    //     fileReader.readAsDataURL(file);
    // });

    //Preencimento das tabelas
    function tabelaBanco(fields) {
        $("#banco-null").remove();

        var linha = "<tr id='" + fields.id_banco + "'>";
        linha += "<td>" + fields.nm_banco + "</td>";
        linha += "<td>" + fields.nr_agencia + "</td>";
        linha += "<td>" + fields.nr_conta + "</td>";
        linha += "<td class='text-right'>";
        linha += "<button id='excluirBanco' type='button' class='btn btn-danger btn-sm' data-id='" + fields.id_banco + "' data-toggle='modal' data-target='#frmRemoverBancoModal'><i class='fas fa-trash'></i></button>";
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
        linha += "<i class='fas fa-trash'></i>";
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
        linha += "<i class='fas fa-trash'></i>";
        linha += "</button>";
        linha += "</td>";
        linha += "</tr>";

        $("#tblContato tbody ").append(linha);
    }

    function tabelaAssessor(fields) {
        $("#tblContatoAssessor tbody ").html('<tr id="contato-assessor-null"><td colspan="3" class="text-center"> Nenhum contato registrado</td></tr>');
        $("#assesssor-null").remove();

        var linha = "<tr id='" + fields.id + "'>";
        linha += "<td>" + fields.nm_acessor + "</td>";
        linha += "<td class='text-right'>";
        linha += "<button id='excluirAssessor' type='button' class='btn btn-danger btn-sm' data-id='" + fields.id + "' data-toggle='modal' data-target='#frmRemoverAssessorModal'>";
        linha += "<i class='fas fa-trash'></i>";
        linha += "</button>";
        linha += "</td>";
        linha += "</tr>";

        $("#tblAssessor tbody ").append(linha);
    }

    function tabelaValor(fields) {
        $("#valor-null").remove();

        var linha = "<tr id='" + fields.id_valor + "'>";
        linha += "<td>" + fields.nm_cidade + "</td>";
        linha += "<td>" + fields.nr_valor + "</td>";
        linha += "<td class='text-right'>";
        linha += "<button id='excluirValor' type='button' class='btn btn-danger btn-sm' data-id='" + fields.id_valor + "' data-toggle='modal' data-target='#frmRemoverValorModal'>";
        linha += "<i class='fas fa-trash'></i>";
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
        linha += "<td class='text-truncate'>" + fields.descricao + "</td>";
        linha += "<td class='text-right'>";
        linha += "<button id='excluirDescricao' type='button' class='btn btn-danger btn-sm' data-tipo='" + campo + "' data-toggle='modal' data-target='#frmRemoverDescricaoModal'>";
        linha += "<i class='fas fa-trash'></i>";
        linha += "</button>";
        linha += "</td>";
        linha += "</tr>";

        $("#tblDescricao tbody ").append(linha);

    }

    function tabelaEnderecoPalestrante(fields) {
        $("#endereco-null").remove();

        var linha = "<tr id='" + fields.id_endereco + "'>";
        linha += "<td>" + fields.tipo_endereco + "</td>";
        linha += "<td>" + fields.endereco + "</td>";
        linha += "<td class='text-right'>";
        linha += "<button id='excluirEndereco' type='button' class='btn btn-danger btn-sm' data-id='" + fields.id_endereco + "' data-toggle='modal' data-target='#frmRemoverEnderecoModal'>";
        linha += "<i class='fas fa-trash'></i>";
        linha += "</button>";
        linha += "</td>";
        linha += "</tr>";

        $("#tblEnderecoPalestrante tbody ").append(linha);
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
    $(document).on("input", "#ds_chamada", function () {
        var limite = 300;
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        $("#cont-char span").text(caracteresRestantes);
    });

//    EVENTOS DE CLICK
    $(".close-alert").click(function () {
        $(this).closest('.alert').fadeOut();
    });

    //Select2
    $('.select-find').select2({
        placeholder: "Buscar",
    });

    //MASK
    $('#nr_valor').mask('#.##0,00', {reverse: true});

    //Enventos de Modal
    $('#frmRemoverBancoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('id')
        var modal = $(this)
        modal.find('.modal-body input[name="id_banco"]').val(recipient)
    })
    $('#frmRemoverValorModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('id')
        var modal = $(this)
        modal.find('.modal-body input[name="id_valor"]').val(recipient)
    })
    $('#frmRemoverDescricaoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('tipo')
        var modal = $(this)
        modal.find('.modal-body input[name="tipo_descricao"]').val(recipient)
    })
    $('#frmRemoverContatoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('id')
        var modal = $(this)
        modal.find('.modal-body input[name="id"]').val(recipient)
    })
    $('#frmRemoverEnderecoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('id')
        var modal = $(this)
        modal.find('.modal-body input[name="id"]').val(recipient)
    })
    $('#frmRemoverAssessorModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('id')
        var modal = $(this)
        modal.find('.modal-body input[name="id"]').val(recipient)
    })
});

