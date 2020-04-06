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
        var data = $('#frmBanco').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
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

    //Preencimento das tabelas
    function tabelaContato(fields) {
        $("#tblContato").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td>" + fields.id_nm_banco + "</td>";
        linha += "<td>" + fields.nr_agencia + "</td>";
        linha += "<td>" + fields.nr_conta + "</td>";
        linha += "</tr>";

        $("#tblContato tbody").append(linha);
    }

    function tabelaBanco(fields) {
        $("#tblBanco").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td>" + fields.id_tp_contato + "</td>";
        linha += "<td>" + fields.ds_contato + "</td>";
        linha += "<td>" + fields.ds_contato + "</td>";
        linha += "</tr>";

        $("#tblBanco tbody").append(linha);
    }
});
