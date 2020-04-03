$(document).ready(function () {
    var url = "http://localhost:8000/dashboard"
    $('#frmNomePalestrante').submit(function (event) {
        event.preventDefault();
        // var data = $('form').serialize();
        // $.ajax({
        //     method: "POST",
        //     url: "/dashboard/fragmentopalestrante",
        //     data: data
        // }).done(function (msg) {
        //     console.log(msg.id);
        // });

        $('#frmPalestranteModal').modal('show');
    });

});