$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('table.display tfoot th').each(function() {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');
    });

    // DataTable
    var table = $('table.display').DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(row) {
                        var data = row.data();
                        return 'Detalles';
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
            }
        },
        dom: '<"row tools-datatables" <"col-md-6 buttons-datatables" B> <"col-md-6 search-datatables d-flex align-items-center justify-content-end pr-3" f> > + rt + <"row" <"col-sm-12 col-md-5" p> <"col-sm-12 col-md-7" i> >',
        buttons: [{
                extend: 'excelHtml5',
                text: '<i class="fa fa-file-excel"></i> <strong>XLS</stron>',
                titleAttr: 'Excel'
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fa fa-file-pdf"></i> <strong>PDF</stron>',
                titleAttr: 'PDF'
            },
            {
                extend: 'print',
                text: '<i class="fa fa-print"></i>',
                titleAttr: 'PDF'
            },
            { extend: 'colvis', className: 'btn btn-primary' },
            { extend: 'pageLength', className: 'btn btn-primary' },
        ],
        "language": {
            "buttons": {
                "print": 'Imprimir',
                "colvis": 'Columnas',
                "pageLength": {
                    "_": "Mostrar %d",
                    "-1": "",
                }
            },
            "search": "Buscar",
            "searchPlaceholder": "Buscar algo...",
            "bPrint": "Imprimir",
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });

    // Apply the search
    table.columns().every(function() {
        var that = this;

        $('input', this.footer()).on('keyup change', function() {
            if (that.search() !== this.value) {
                that
                    .search(this.value)
                    .draw();
            }
        });
    });
});