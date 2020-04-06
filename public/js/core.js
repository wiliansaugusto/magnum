$(document).ready(function () {
    var url = "http://localhost:8000/dashboard"
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

});

$(document).ready(function () {
    var url = "http://localhost:8000/dashboard"
    var idPalestrante = $('#id_palestrtante').parentes
    $('#frmBanco').submit(function (event) {

        event.preventDefault();
        var data = $('#frmBanco').serialize();
        $.ajax({
            method: "POST",
            url: "/dashboard/salvarbanco",
            data: data
        }).done(function (data) {
            $("#id_palestrante").val(data.id);
            $("nm_banco").val(data.nm_banco);
            $("#nr_conta").val(data.nr_conta);
            $("#nr_agencia").val(data.nr_agencia);
            $("#frmBanco")[0].reset();
            $('#frmPalestranteModal').modal('show');
              });

        });


});
