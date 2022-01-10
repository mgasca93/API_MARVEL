$(document).ready(function() {
    $('#tabla_pedidos').DataTable({
        "language": {
            "lengthMenu": "_MENU_ pedidos por página",
            "zeroRecords": "Aun no haz realizado un pedido",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay pedidos para mostrar",
            "search": "Buscar:",
            "infoFiltered": "(filtrado de _MAX_ registros)",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Síguiente",
                "previous": "Anterior"
            },
        }
    });
});