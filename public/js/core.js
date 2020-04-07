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

    $("#cttAssessor").on('click',function (event) {
        $('#frmContatoPalestrante').submit(function (event) {
            event.preventDefault();
            var data = $('#frmContatoPalestrante').serialize() + "&id_acessor=" + $("#id_acessor").val();
            $.ajax({
                method: "POST",
                url: "/dashboard/contato",
                data: data
            }).done(function (data) {
                tabelaContatoAcessor(data);
                $("#frmContatoPalestrante")[0].reset();
                $('#frmContatoModal').modal('toggle');
            });
        });
    });

    $("#cttPalestrante").on("click",function (event) {
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



    $('#frmAssessor').submit(function (event) {

        event.preventDefault();
        var data = $('#frmAssessor').serialize() + "&id_palestrante=" + $("#id_palestrante").val();
        $.ajax({
            method: "POST",
            url: "/dashboard/assessor/",
            data: data
        }).done(function (data) {
            tabelaAssessor(data);
            $("#id_acessor").val(data.id);
      //      $("#id_acessor").css("visibility", "visible");


            $("#frmAssessor")[0].reset();
            $('#frmAssessorModal').modal('toggle');
        });
    });


    //Preencimento das tabelas
    function tabelaBanco(fields) {
        $("#tblBanco").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td>" + fields.id_nm_banco + "</td>";
        linha += "<td>" + fields.nr_agencia + "</td>";
        linha += "<td>" + fields.nr_conta + "</td>";
        linha += "</tr>";

        $("#tblBanco tbody ").append(linha);
    }

        function tabelaContatoAcessor(fields) {
        $("#tblContatoAcessor").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td>" + fields.id_tp_contato + "</td>";
        linha += "<td>" + fields.ds_contato + "</td>";
        linha += "</tr>";

        $("#tblContatoAcessor tbody ").append(linha);
    }
    function tabelaContato(fields) {
        $("#tblContato").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td>" + fields.id_tp_contato + "</td>";
        linha += "<td>" + fields.ds_contato + "</td>";
        linha += "</tr>";

        $("#tblContato tbody ").append(linha);
    }

    function tabelaAssessor(fields) {
        $("#tblAssessor").css("visibility", "visible");

        var linha = "<tr>";
        linha += "<td>" + fields.nm_acessor + "</td>";
        linha += "</tr>";

        $("#tblAssessor tbody ").append(linha);
    }

});
