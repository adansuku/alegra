


<table class="table" id="patients" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th class="text-right pr-4">Acción</th>
        </tr>
    </thead>
</table>

<script>
//DETELE PATIENTS

$('#patients').on('click', '.btn-delete[data-remote]', function (e) { 
    e.preventDefault();
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = $(this).data('remote');
    // confirm then
    if (confirm('CUIDADO!!! Vas a eliminar un usuario definitivamente de la base de datos, ¿Estás de acuerdo?')) {
        $.ajax({
            url: url,
            type: 'DELETE',
            dataType: 'json',
            data: {method: '_DELETE', submit: true}
        }).always(function (data) {
            $('#patients').DataTable().draw(false);
        });
    }else
        alert("Has cancelado la eliminación de la persona seleccionada");
});



    $(document).ready(function() {
        $('#patients').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('allpatients') }}",

            columns: [
                {
                    data: 'nombre',
                    
                },
                {
                    data: 'apellido'
                },
                {
                    data: 'accion',
                    className: 'text-right',
                    name: 'accion',
                    orderable: false,
                    searchable: false
                }
            ],
            "scrollX": false,
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Detalles: ' + data[0] + ' ' + data[1];
                        }
                    }),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                }
            },
            dom: '<"row tools-datatables" <"col-md-6 buttons-datatables" B> <"col-md-6 search-datatables" f> > + rt + <"row" <"col-sm-12 col-md-5" p> <"col-sm-12 col-md-7 text-right" i> >',
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
                {
                    extend: 'colvis',
                    className: 'btn btn-primary'
                },
                {
                    extend: 'pageLength',
                    className: 'btn btn-primary'
                },
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
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente",
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
                
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
</script>