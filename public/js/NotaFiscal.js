$(document).ready(function () {
    $(document).on('click', 'button', function (e) {
        if ($(this).attr("name") != undefined) {
            var modal = $(this).attr("name");
            var link = $(this).attr("data-link");
            DATAREF = $(this).attr("data-link");
            $("#webkit-xml-viewer-source-xml").enlight(false);
            if (modal === "DownloadXML") {
                alert("entrei");
                $("#DATAREF-GLOBAL").val(link);
                DATAREF = $("#DATAREF-GLOBAL").val(link);
            }
            $('.Number').html("" + $(this).attr("data-ref") + "");
            $('#CTP_CODIGO').val($(this).attr("data-ref"));
            $.ajax({
                type: "POST",
                url: 'PortalAt/NotaFiscal/' + $(this).attr("name") + '',
                dataType: "json",
                data: {
                    DATAREF: "" + DATAREF + ""
                },
                beforeSend: function () {
                    Carregamento();
                },
                success: function (data) {
                    $("#link-pdf").attr("src", link);
                    $("#webkit-xml-viewer-source-xml").text(data);
                    $("#webkit-xml-viewer-source-xml").enlight(true);
                    $("#" + modal + "").modal("show");
                    Swal.close();
                }
            });
        }
    });
});

// EnlighterJS.init('pre', 'code', {
//     language : 'javascript',
//     theme: 'enlighter',
//     indent : 2
// });