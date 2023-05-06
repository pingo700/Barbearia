$(function () {
    $("#TableUsuario").DataTable({
        "bDestroy": true,
        "ajax": "TableUsuario",
        "order": [
            [0, "desc"]
        ],
        "language": {
            "search": "Pesquisar:",
            "sInfo": "Mostrando _START_ para _END_ de _TOTAL_ entradas",
            "paginate": {
                "previous": "Anterior",
                "next": "Proximo"
            },
            "zeroRecords": false
        },
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false
    });
});