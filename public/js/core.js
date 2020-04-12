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
        $("#tblAssessor").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td>" + fields.nm_acessor + "</td>";
        linha += "</tr>";

        $("#tblAssessor tbody ").append(linha);
    }

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
