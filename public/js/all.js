function SwitchCase(id, mes, data, nome) {
    if ($('#' + nome + '').length) {
        $("#DivPadrão").html(data);
        DefinirDataTable("" + nome + "");
        document.getElementById("" + nome + "").style.display = "block";
        Swal.close();
    } else {
        switch (nome) {
            case "CadastrarUsuario":
                var table = $('#TableUsuario').DataTable( {
                    ajax: "TableUsuario"
                } );
                 
                setInterval( function () {
                    table.ajax.reload();
                }, 30000 );
            break;
        }
        Alerta('error', 'Oops...', data, "#f52525");
    }
}

function Alerta(type, title, message, color) {
    if (message != 200) {
        Swal.fire({
            icon: type,
            title: title,
            text: message,
            confirmButtonColor: color,
        });
    } else {
        Swal.close();
    }
}

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

function Validator(type, title, message, color) {
    if (message != 200) {
        Swal.fire({
            icon: type,
            title: title,
            text: message,
            confirmButtonColor: color,
        });
    } else {
        Swal.close();
    }
}
//Alerta('success', 'Sucesso !', 'Ticket N°' + data[0].CTP_CODIGO + ' gerado com sucesso!', "#7066e0");
$("form").submit(function (e) {
    if($(this).attr("validator") == 1){
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
                            SwitchCase(id, mes, data, nome);
                        }
                    });
                }
            })
        }
    }
    
});