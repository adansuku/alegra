<table class="table" id="workers" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            {{--
            <th>Fecha de Nacimiento</th>
            <th>Dni</th>
            <th>Direccion</th>
            <th>Teléfono</th> --}}
            <th>Email</th>
            <th>Acción</th>
        </tr>
    </thead>
</table>

<script>
    $('#workers').on('click', '.btn-delete[data-remote]', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var url = $(this).data('remote');
        console.log(url);
        // confirm then
        if (confirm('CUIDADO!!! Vas a eliminar un usuario definitivamente de la base de datos, ¿Estás de acuerdo?')) {
            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    method: '_DELETE',
                    submit: true
                }
            }).always(function(data) {
                $('#workers').DataTable().draw(false);
            });
        } else
            alert("Has cancelado la eliminación de la persona seleccionada");
    });

    $(document).ready(function() {
        $('#workers').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('allworkers') }}",
            columns: [{
                    data: 'nombre'
                }, {
                    data: 'apellido'
                },
                // {
                //     data: 'fecha_nacimiento'
                // }, {
                //     data: 'dni'
                // }, {
                //     data: 'direccion'
                // }, {
                //     data: 'telefono'
                // }, 
                {
                    data: 'email'
                }, {
                    className: "text-right pr-4",
                    targets: ['_all'],
                    data: 'accion',
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
            dom: '<"row tools-datatables" <"col-md-6 buttons-datatables" B> <"col-md-6 search-datatables d-flex align-items-center justify-content-end pr-3" f> > + rt + <"row" <"col-sm-12 col-md-5" i> <"col-sm-12 col-md-7" p> >',
            buttons: [{
                extend: 'excelHtml5',
                text: '<i class="fa fa-file-excel"></i> <strong>XLS</stron>',
                titleAttr: 'Excel'
            }, {
                extend: 'pdfHtml5',
                text: '<i class="fa fa-file-pdf"></i> <strong>PDF</stron>',
                titleAttr: 'PDF'
            }, {
                extend: 'print',
                text: '<i class="fa fa-print"></i>',
                titleAttr: 'PDF'
            }, {
                extend: 'colvis',
                className: 'btn btn-primary'
            }, {
                extend: 'pageLength',
                className: 'btn btn-primary'
            }, ],
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
    });
</script>