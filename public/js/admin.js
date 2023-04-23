function Carregamento() {
    Swal.fire({
        title: 'Aguarde...',
        html: 'Buscando...',
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {}, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {})
}

function CarregaDataTable(TableName, Data) {
    var Table = $("#" + TableName).DataTable();
    Table.destroy();
    $("#" + TableName + " tbody").html(Data);
    DefinirDataTable(TableName);
}

function CarregarTable(Action) {
    $.ajax({
        type: "POST",
        url: Action,
        enctype: 'multipart/form-data',
        dataType: "json",
        data: $(this).serialize(),
        beforeSend: function () {
            Carregamento();
        },
        success: function (data) {
            CarregaDataTable(Action, data);
        }
    }).fail(function (jqXHR, textStatus, msg) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: msg,
            confirmButtonColor: "#f52525",
        });
    });
}

//Alerta('success', 'Sucesso !', 'Ticket N°' + data[0].CTP_CODIGO + ' gerado com sucesso!', "#7066e0");
$("form").submit(function (e) {
    if ($(this).attr("validator") == 1) {
        e.preventDefault();
        var form = $(this);
        var nome = $(this).attr("name")
        var id = $(this).attr("id")
        if (nome == undefined) {
            $.ajax({
                type: "POST",
                url: form.attr('action'),
                enctype: 'multipart/form-data',
                data: $(this).serialize(),
                beforeSend: function () {
                    Carregamento();
                },
                success: function (data) {
                    Validator('error', 'Oops...', data, "#f52525")
                }
            });
        } else {
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
                    $.ajax({
                        type: "POST",
                        url: form.attr('action'),
                        enctype: 'multipart/form-data',
                        dataType: "json",
                        data: $(this).serialize(),
                        beforeSend: function () {
                            Carregamento();
                        },
                        success: function (data) {
                            CarregarTable('' + form.attr('action') + 'Table');
                        }
                    }).fail(function (jqXHR, textStatus, msg) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: msg,
                            confirmButtonColor: "#f52525",
                        });
                    });
                }
            })
        }
    }

});