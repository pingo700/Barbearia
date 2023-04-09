$(document).ready(function () {
    $(document).on('click', '#ConfirmarRecebimentoPecas', function (e) {
        Swal.fire({
            title: 'Recebimento de Peças',
            icon: 'question',
            html: 'Confirma o recebimento das peças solicitadas para iniciar o atendimento ?',
            confirmButtonColor: '#A9D18E',
            denyButtoColor: '#F6CECE',
            TextColor: '#0a0a0a',
            showDenyButton: true,
            confirmButtonText: 'Confirmar',
            denyButtonText: `Cancelar`,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: 'PortalAt/OrdenServico/' + $(this).attr("id") + '',
                    dataType: "json",
                    data: {
                        DATAREF: $(this).attr("data-ref")
                    },
                    beforeSend: function () {
                        Carregamento();
                    },
                    success: function (data) {
                        Alerta('error', 'Oops...', data, "#f52525");
                        if (data == 200) {
                            $('#CAT_SITUACAO').find('[value="AT"]').attr('selected', true);
                            var form = $('form[id="Recarregar"]');
                            form.submit();
                        }
                    }
                });
            }
        })
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

$("#NovaOS").on('submit', function (e) {
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
                success: function (data) {
                    if (data == 200) {
                        $('#form-field').val('');
                        document.getElementById("file").value = "";
                        $('#NFI_REFERENCIA_NOS').val('');
                        $('#NFI_DESCRICAO_NOS').val('');
                        $('#RSI_REFERENCIA_NOS').val('');
                        $('#PRO_DESCRICAO_NOS').val('');
                        $('#CAT_ARQUIVODOC_NOS').val('');
                        $('#CAT_DATACOMPRA_NOS').val('');
                        $('#CAT_LOCALCOMPRA_NOS').val('');
                        $('#CAT_NOMECLIENTE_NOS').val('');
                        $('#CCI_DEFEITOTEC_NOS').val('');
                        $('#CAT_NUMEROOS_NOS').val('');
                        $('#CAT_OBSERVACOES_NOS').val('');
                        $('#BOTAO_SUBMIT_NOS').val('');
                        $("#RSI_NUMEROSERIE").attr('readonly', false);
                        $("#NFI_REFERENCIA_NOS").attr('disabled', true);
                        $("#NFI_DESCRICAO_NOS").attr('disabled', true);
                        $("#NFI_REFERENCIA_NOS").attr('readonly', true);
                        $("#NFI_DESCRICAO_NOS").attr('readonly', true);
                        $("#RSI_REFERENCIA_NOS").attr('disabled', true);
                        $("#PRO_DESCRICAO_NOS").attr('disabled', true);
                        $("#CAT_ARQUIVODOC_NOS").attr('disabled', true);
                        $("#CAT_DATACOMPRA_NOS").attr('disabled', true);
                        $("#CAT_LOCALCOMPRA_NOS").attr('disabled', true);
                        $("#CAT_NOMECLIENTE_NOS").attr('disabled', true);
                        $("#CCI_DEFEITOTEC_NOS").attr('disabled', true);
                        $('#CAT_OBSERVACOES_NOS').attr('disabled', true);
                        $("#CAT_NUMEROOS_NOS").attr('disabled', true);
                        $("#ARQUIVO_NOS").attr('disabled', true);
                        $("#BOTAO_SUBMIT_NOS").attr('disabled', true);
                        $('#NovaOs').modal('hide');
                        $('#file-label').html('Escolher Arquivo');
                        $('#CAT_SITUACAO').find("[value=" + 'PN', 'AP', 'PE', 'EA' + "]").attr('selected', true);
                        $('#MES').find("[value='" + mes + "']").attr('selected', true);
                        var form = $('form[id="Recarregar"]');
                        form.submit();
                        Sucesso();
                    }
                    Alerta('error', 'Oops...', data, "#f52525");
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

// var upload = document.getElementById("file");
// upload.addEventListener("change", function (e) {
    
//     var size = upload.files[0].size;
//     if (size < 1048576) { 
//     } else {
//         Alerta('error', 'Oops...', 'Tamanho de arquivo inválido !', "#f52525");
//         upload.value = "";        
//     }
//     e.preventDefault();
// });

// $('#NovaOsButton').on("click", function (event) {
//     $.ajax({
//         type: "POST",
//         url: 'PortalAt/OrdenServico/Nova',
//         dataType: "json",
//         data: {
//             DATAREF: $('#DATAREF-GLOBAL').val()
//         },
//         success: function (data) {
//             $("#NovaOsBody").html(data);
//             $("#NovaOs").modal("show");
//             Swal.close();
//         }
//     });
// });

$('#NaoPrecisaPeca').on("click", function (event) {
    if (document.getElementById('NaoPrecisaPeca').checked == true) {
        Swal.fire({
            title: 'Solicitação de Peças',
            icon: 'question',
            html: 'Atendimento não precisa de peças ?',
            confirmButtonColor: '#A9D18E',
            denyButtoColor: '#F6CECE',
            TextColor: '#0a0a0a',
            showDenyButton: true,
            confirmButtonText: 'Confirmar',
            denyButtonText: `Cancelar`,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: 'PortalAt/OrdenServico/PegaCCI',
                    data: {
                        DATAREF: $('#DATAREF-GLOBAL').val()
                    },
                    success: function (data) {
                        $("#accordionFlushExample").remove();
                        document.getElementById('NaoPrecisaPeca').checked = true;
                        $("#SolicitacaoDePecasModal").append(data);

                    }
                });
            } else {
                document.getElementById('NaoPrecisaPeca').checked = false;
            }
        })
    }
    if (document.getElementById('NaoPrecisaPeca').checked == false) {
        $.ajax({
            type: "POST",
            url: 'PortalAt/OrdenServico/' + $(this).attr("id") + '',
            dataType: "json",
            data: {
                DATAREF: $('#DATAREF-GLOBAL').val()
            },
            beforeSend: function () {
                Carregamento();
            },
            success: function (data) {
                $("#CCI_CODIGO").remove();
                $("#SEM_PECAS").remove();
                $("#Volta").remove();
                $("#Teste").html(data);
                Swal.close();
            }
        });
    }
});


$('#BuscaNumeroDeSerie').on("click", function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: 'PortalAt/OrdenServico/BuscaNumeroDeSerie',
        data: {
            NUMERODESERIE: $('#RSI_NUMEROSERIE').val()
        },
        beforeSend: function () {
            Carregamento();
        },
        success: function (data) {
            $.each(data, function (key, row) {
                $('#NFI_REFERENCIA_NOS').val(row.NFI_REFERENCIA);
                $('#NFI_DESCRICAO_NOS').val(row.NFI_DESCRICAO);
                $('#RSI_REFERENCIA_NOS').val(row.RSI_REFERENCIA);
                $('#PRO_DESCRICAO_NOS').val(row.PRO_DESCRICAO);
                $('#CAT_ARQUIVODOC_NOS').val(row.CAT_ARQUIVODOC);
                $('#CAT_DATACOMPRA_NOS').val(row.CAT_DATACOMPRA);
                $('#CAT_LOCALCOMPRA_NOS').val(row.CAT_LOCALCOMPRA);
                $('#CAT_NOMECLIENTE_NOS').val(row.CAT_NOMECLIENTE);
                $('#CCI_DEFEITOTEC_NOS').val(row.CCI_DEFEITOTEC);
                $('#CAT_NUMEROOS_NOS').val(row.CAT_NUMEROOS);
                $('#CAT_OBSERVACOES_NOS').val(row.CAT_OBSERVACOES);
                $('#BOTAO_SUBMIT_NOS').val(row.CAT_NUMEROOS);
            });

            $("#NFI_REFERENCIA_NOS").attr('disabled', false);
            $("#NFI_DESCRICAO_NOS").attr('disabled', false);
            $("#NFI_REFERENCIA_NOS").attr('readonly', true);
            $("#NFI_DESCRICAO_NOS").attr('readonly', true);
            $("#RSI_REFERENCIA_NOS").attr('disabled', false);
            $("#PRO_DESCRICAO_NOS").attr('disabled', false);
            $("#CAT_ARQUIVODOC_NOS").attr('disabled', false);
            $("#CAT_DATACOMPRA_NOS").attr('disabled', false);
            $("#CAT_LOCALCOMPRA_NOS").attr('disabled', false);
            $("#CAT_NOMECLIENTE_NOS").attr('disabled', false);
            $("#CCI_DEFEITOTEC_NOS").attr('disabled', false);
            $('#CAT_OBSERVACOES_NOS').attr('disabled', false);
            $("#CAT_NUMEROOS_NOS").attr('disabled', false);
            $("#ARQUIVO_NOS").attr('disabled', false);
            $("#BOTAO_SUBMIT_NOS").attr('disabled', false);

            Swal.close();
        }
    });
});