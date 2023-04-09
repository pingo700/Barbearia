$("#formulario").submit(function (e) {
    e.preventDefault();
    var form = $(this);
    $.ajax({
        type: "POST",
        url: form.attr('action'),
        data: $(this).serialize(),
        beforeSend: function () {
            Swal.fire({
                title: 'Aguarde...',
                html: 'Buscando...',
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                    const b = Swal.getHtmlContainer().querySelector('b');
                    timerInterval = setInterval(() => {
        
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {})
        },
        success: function (data) {
            if (data == 200) {
                $('#cadastrarCliente').modal('hide');
                $("#USU_CNPJ").val($("#CNPJ_CADASTRAR").val());
                $("#CNPJ_CADASTRAR").val($("#CLI_SENHA").val());
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: "Sucesso !",
                    confirmButtonColor: "#4ff525",
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data,
                    confirmButtonColor: "#f52825",
                })
            }
        }
    });
});

