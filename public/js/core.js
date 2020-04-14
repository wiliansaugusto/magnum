$(document).ready(function () {

    $('#frmNomePalestrante').submit(function (event) {
        event.preventDefault();
        var data = $('#frmNomePalestrante').serialize();
        $.ajax({
            method: "POST",
            url: "/dashboard/fragmentopalestrante",
            data: data
        }).done(function (data) {

            $("#id_palestrante").val(data.id);
            $("#nm_palestrante").val(data.nm_palestrante);

            $("#frmNomePalestrante")[0].reset();
            $('#frmPalestranteModal').modal('show');
            $('#frmNomePalestranteModal').modal('toggle');
        });
    });

    $('#frmContatoPalestrante').submit(function (event) {
        event.preventDefault();
        var data = $('#frmContatoPalestrante').serialize() + "&id_palestrante=" + $("#id_palestrante").val()
        +"&id_palestrante=" + $("#id_palestrante").val();
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
            data: data
        }).done(function (data) {
            tabelaContatoAcessor(data);
            $("#frmContatoAcessor")[0].reset();
            $('#frmContatoAcessorModal').modal('toggle');
        });
    });

    $('#frmAssessor').submit(function (event) {

        event.preventDefault();
        var data = $('#frmAssessor').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/assessor/",
            data: data
        }).done(function (data) {
            tabelaAssessor(data);
            $("#frmAssessor")[0].reset();
            $('#frmAssessorModal').modal('toggle');
        });
    });

    $('#frmChamada').submit(function (event) {
        event.preventDefault();
        var data = $('#frmChamada').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/chamada",
            data: data
        }).done(function (data) {
            tabelDescricao(data);
            $('#frmChamadaModal').modal('toggle');
        });
    });
    $('#frmCurriculo').submit(function (event) {
        event.preventDefault();
        var data = $('#frmCurriculo').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/curriculo",
            data: data
        }).done(function (data) {
            tabelDescricaoCurriculo(data);
            $('#frmCurriculoModal').modal('toggle');
        });
    });
    $('#frmCurriculoTec').submit(function (event) {
        event.preventDefault();
        var data = $('#frmCurriculoTec').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/curriculoTec",
            data: data
        }).done(function (data) {
            tabelDescricaoCurriculoTec(data);

            $('#frmCurriculoTecModal').modal('toggle');
        });
    });
    $('#frmEquip').submit(function (event) {
        event.preventDefault();
        var data = $('#frmEquip').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/equip",
            data: data
        }).done(function (data) {
            tabelDescricaoEquip(data);
            $('#frmEquipamentoModal').modal('toggle');
        });
    });
    $('#frmFormaPagamento').submit(function (event) {

        event.preventDefault();
        var data = $('#frmFormaPagamento').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/formapgto",
            data: data
        }).done(function (data) {
            tabelDescricaoForma(data);
            $('#frmFormaPagamentoModal').modal('toggle');
        });
    });
    $('#frmInvestimento').submit(function (event) {
        event.preventDefault();
        var data = $('#frmInvestimento').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/investimento",
            data: data
        }).done(function (data) {
            tabelDescricaoInvest(data);
            $('#frmInvestimentoModal').modal('toggle');
        });
    });
    $('#frmObs').submit(function (event) {
        event.preventDefault();
        var data = $('#frmObs').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/descobs",
            data: data
        }).done(function (data) {
            tabelDescricaoObs(data);

            $('#frmObservacaoModal').modal('toggle');
        });
    });

    $('#frmEnderecoPalestrante').submit(function (event) {
        event.preventDefault();
        var data = $('#frmEnderecoPalestrante').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/endereco",
            data: data
        }).done(function (data) {
            tabelaEnderecoPalestrante(data);
            $("#frmEnderecoPalestrante")[0].reset();
            $('#frmEnderecoPalestranteModal').modal('toggle');
        });
    });

    //Busca de CEP
    $("#nr_cep").focusout(function(){
        $.ajax({
            url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
            dataType: 'json',
            success: function(resposta){
                if (resposta.erro === true){
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

                }else{

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
        $("#tblBanco").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<input type='hidden' name='id_nm_banco' value='" + fields.id_nm_banco + "' />";
        linha += "<td>" + fields.nm_banco + "</td>";
        linha += "<td>" + fields.nr_agencia + "</td>";
        linha += "<td>" + fields.nr_conta + "</td>";
        linha += "</tr>";

        $("#tblBanco tbody ").append(linha);
    }

    function tabelaContatoAcessor(fields) {
        $("#tblContatoAssessor").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td>" + fields.nm_tipo_contato + "</td>";
        linha += "<td>" + fields.ds_contato + "</td>";
        linha += "<input type='hidden' name='id_contato[]' value='" + fields.id_contato + "' />";
        linha += "</tr>";

        $("#tblContatoAssessor tbody ").append(linha);
    }

    function tabelaContato(fields) {
        $("#tblContato").css("visibility", "visible");

        var linha = "<tr>";
        linha +=  "<td><input type='hidden' name='id_contato[]' value='" + fields.id_contato + "' />";
        linha +=  fields.nm_tipo_contato + "</td>";
        linha += "<td>" + fields.ds_contato + "</td>";
        linha += "</tr>";

        $("#tblContato tbody ").append(linha);
    }

    function tabelaAssessor(fields) {
        $("#tblContatoAssessor tbody ").html("");
        $("#tblContatoAssessor ").css("visibility", "hidden");
        $("#tblAssessor").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td>" + fields.nm_acessor + "</td>";
        linha += "</tr>";

        $("#tblAssessor tbody ").append(linha);
    }

<<<<<<< HEAD
    function tabelDescricao(fields){
        $("#tblDescricao").css("visibility", "visible");
        var linha = "<tr>";
        linha += "<td> Chamada</td>";
        linha += "<td class='text-truncate'>" + fields.ds_chamada + "</td>";
        linha += "</tr>";

        $("#tblDescricao tbody ").append(linha);

    }
    function  tabelDescricaoCurriculo(fields){
        $("#tblDescricao").css("visibility", "visible");
        var linha = "<tr>";
        linha += "<td> Curriculo</td>";
        linha += "<td class='text-truncate'>"  + fields.ds_curriculo + "</td>";
        linha += "</tr>";
        $("#tblDescricao tbody ").append(linha);

    }
    function tabelDescricaoCurriculoTec(fields){
        $("#tblDescricao").css("visibility", "visible");
        var linha = "<tr>";
        linha += "<td> Curriculo Técnico</td>";
        linha += "<td class='text-truncate'>"  + fields.ds_curriculo_tecnico + "</td>";
        linha += "</tr>";
        $("#tblDescricao tbody ").append(linha);

    }
    function tabelDescricaoForma(fields){
        $("#tblDescricao").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td> Forma de Pagamento</td>";
        linha += "<td class='text-truncate'>"  + fields.ds_forma_pagamento + "</td>";
        linha += "</tr>";
        $("#tblDescricao tbody ").append(linha);
    }
    function tabelDescricaoInvest(fields){
        $("#tblDescricao").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td> Investimento Tec</td>";
        linha += "<td class='text-truncate'>"  + fields.ds_forma_pagamento + "</td>";
        linha += "</tr>";
        $("#tblDescricao tbody ").append(linha);

    }
    function tabelDescricaoEquip (fields){
        $("#tblDescricao").css("visibility", "visible");
        var linha = "<tr>";
        linha += "<td> Equipamentos Necessário</td>";
        linha += "<td class='text-truncate'>"  + fields.ds_equipe_necessario + "</td>";
        linha += "</tr>";
        $("#tblDescricao tbody ").append(linha);
    }
    function tabelDescricaoObs(fields){
        $("#tblDescricao").css("visibility", "visible");
        var linha = "<tr>";
        linha += "<td>Observações</td>";
        linha += "<td class='text-truncate'>"  + fields.ds_observacao + "</td>";
        linha += "</tr>";
        $("#tblDescricao tbody ").append(linha);
    }


=======
    function tabelaEnderecoPalestrante(fields) {
        $("#tblEnderecoPalestrante").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td>" + fields.tipo_endereco + "</td>";
        linha += "<td>" + fields.endereco + "</td>";
        linha += "</tr>";

        $("#tblEnderecoPalestrante tbody ").append(linha);
    }
>>>>>>> 18755e285fcb2c6684f64eef9a99fb67ce4f5a7a

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
});
