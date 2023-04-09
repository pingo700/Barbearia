$("#TicketDePagamentoUpload").on('submit', function (e) {
    Swal.fire({
        title: 'Confirmação',
        icon: 'question',
        html: $(this).attr("title"),
        confirmButtonColor: '#A9D18E',
        denyButtoColor: '#F6CECE',
        TextColor: '#0a0a0a',
        showDenyButton: true,
        confirmButtonText: 'Confirmar',
        denyButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
            e.preventDefault();
            var form = $(this);
            var formData = new FormData(this);
            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    Carregamento();
                },
                success: function (retorno) {
                    $('#TicketDePagamento').modal('hide');
                    Alerta('error', 'Oops...', retorno, "#f52525");
                    var form = $('form[id="Recarregar"]');
                    form.submit();
                },
                cache: false,
                contentType: false,
                processData: false,
                xhr: function () {
                    var myXhr = $.ajaxSettings.xhr();
                    if (myXhr.upload) {
                        myXhr.upload.addEventListener('progress', function () {

                        }, false);
                    }
                    return myXhr;
                }
            });
        }
    })

});


$(document).ready(function () {
    $(document).on('click', '#CAT_CODIGO', function (e) {
        var total = 0;
        $("input:checked").each(function () {
            total = total + Number($(this).attr("data-total"));
        });
        $("#all-value-place").val(total.toFixed(2));
        $(".all-value").html(new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format($("#all-value-place").val()));
        if (total == 0) {
            $("#BotaoSubmit").attr('disabled', true);
        } else {
            $("#BotaoSubmit").attr('disabled', false);
        }

    });
});

$(document).ready(function () {
    $('#file').change(function () {
        var i = $(this).prev('label').clone();
        if ($('#file')[0].files[0] != undefined) {
            if ($('#file')[0].files[0].size < 1048576) {
                var file = $('#file')[0].files[0].name;
                $(this).prev('label').text("" + file.slice(0, 19) + "...");
            } else {
                Alerta('error', 'Oops...', 'Tamanho de arquivo inválido,limite de 1MB !', "#f52525");
            }
        }

    });
});


$(document).ready(function () {
    $('#file2').change(function () {
        var i = $(this).prev('label').clone();
        if ($('#file2')[0].files[0] != undefined) {
            if ($('#file2')[0].files[0].size < 1048576) {
                var file = $('#file2')[0].files[0].name;
                $(this).prev('label').text("" + file.slice(0, 19) + "...");
            } else {
                Alerta('error', 'Oops...', 'Tamanho de arquivo inválido,limite de 1MB !', "#f52525");
            }
        }

    });
});