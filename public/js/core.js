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



    //Preencimento das tabelas
    function tabelaContato(fields) {
        $("#tblContato").css( "visibility", "visible" );

        var linha = "<tr>";
                linha +="<td>"+fields.id_tp_contato+"</td>";
                linha +="<td>"+fields.ds_contato+"</td>";
            linha +="</tr>";

        $("#tblContato tbody").append(linha);
    }
});