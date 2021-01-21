(function($) {
    "use strict"; // Start of use strict
    //   $(document).ready(function() {
    //   $(".sidebar").toggleClass("toggled");
    // } );

    setTimeout(function() {
        $('#loader').fadeOut('fast');
    }, 100); // <-- time in milliseconds

    // Toggle the side navigation
    $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
        $("body").toggleClass("sidebar-toggled");
        $(".sidebar").toggleClass("toggled");
        if ($(".sidebar").hasClass("toggled")) {};
    });

    // Close any open menu accordions when window is resized below 768px
    $(window).resize(function() {
        if ($(window).width() < 768) {};
    });

    // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
    $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
        if ($(window).width() > 768) {
            var e0 = e.originalEvent,
                delta = e0.wheelDelta || -e0.detail;
            this.scrollTop += (delta < 0 ? 1 : -1) * 30;
            e.preventDefault();
        }
    });

    // Scroll to top button appear
    $(document).on('scroll', function() {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });

    // Smooth scrolling using jQuery easing
    $(document).on('click', 'a.scroll-to-top', function(e) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
        }, 1000, 'easeInOutExpo');
        e.preventDefault();
    });

})(jQuery); // End of use strict




//Datatables
$(document).ready(function() {
    $('.datatables').DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(row) {
                        var data = row.data();
                        return 'Detalles:';
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
            }
        },
        dom: '<"row tools-datatables" <"col-md-8 d-flex flex-row align-items-center buttons-datatables" B> <"col-md-4 search-datatables d-flex align-items-center justify-content-end pr-3" f> > + rt + <"row" <"col-sm-12 col-md-5" p> <"col-sm-12 col-md-7 text-right" i> >',
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
}); //end on load


// $(document).ready(function() {
//     $('#patients').DataTable({
//         processing: true,
//         serverSide: true,
//         ajax: "{{ url('allpatients') }}",

//         columns: [{
//             data: 'nombre',

//         }, {
//             data: 'apellido'
//         }, {
//             data: 'accion',
//             className: 'text-right',
//             name: 'accion',
//             orderable: false,
//             searchable: false
//         }],
//         "scrollX": false,

// });
// </script>