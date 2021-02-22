@extends('layouts.home') @section('title', "Tables") @push('css')
<link href="{{mix('vendor/datatable/css/datatable.css')}}" rel="stylesheet"> @endpush @section('content')

<!-- Modal Add Document-->
<div class="modal fade" id="history_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir historia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {!! Form::open(['url' => route('patientHistories.store', ['patient_id' => $patient->id]),'method' =>
                'POST', 'id' => 'history_form']) !!}
                @include('patients.create.history')
                {!! Form::close() !!}

                {{-- <script>
                    jQuery(document).ready(function () {
                        $("#addHistory").click(function (e) {
                            e.preventDefault();
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: "post",
                                url: "{{route('patientHistories.store')}}",
                data: $('#history_form').serialize() + "&patient_id=" + {{$patient->id}},
                success: function (msg) {
                alert("Historia Insertada correctamente");
                $('#history_modal').modal('hide');
                $('.modal-backdrop').hide();
                $('#history_table').DataTable().ajax.reload();
                },
                error: function (error) {
                console.log(error)
                alert("data not saved");
                }
                });
                });
                });
                </script> --}}


            </div>
        </div>
    </div>
</div>
<!--end modal add documents-->


<div class="container-fluid ">
    <div class="card shadow p-4">
        <div class="row">

            <div class="col-md-6">
                <h1 class="h3 mb-2 text-gray-800">Historial de {{$patient->nombre}} {{$patient->apellido}}</h1>
            </div>

            <div class="col-md-6 ">
                <div class="float-sm-right">
                    <button type="button" class="btn btn-secondary float-right" data-toggle="modal"
                        data-target="#history_modal" data-id={{$patient->id}}>
                        Añadir historial <i class="fas fa-file-upload"></i>
                </div>
            </div>

            <div class="col-sm-12">
                <table class="table bg-white " width="100%" cellspacing="0" id="history_table">
                    <thead class="thead-light">
                        <tr>
                            <th class="all">Fecha Registro</th>
                            <th class="all ">Fecha de la acción</th>
                            <th class="all search">Tipo Acción/Tarea</th>
                            <th class="all search">Subtipo Acción/Tarea</th>
                            <th class="all">Destinado a</th>
                            <th class="none">Descripción</th>
                            <th class="all">Profesional Responsable</th>
                            <th class="all">Observaciones</th>
                            <th class="all">Acción</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($patient->patientHistory as $item)
                        <tr>
                            <td>{{ date('d / m / Y', strtotime($item->acc_fecha_reg )) }}</td>
                            <td>{{ date('d / m / Y', strtotime($item->acc_fecha_realiz )) }}</td>
                            <td>{!! $item->acc_tipo_accion !!}</td>
                            <td>{!! $item->acc_subtipo_accion !!}</td>
                            <td>
                                @foreach($item->destinado_a as $item_destinado) - {!! $item_destinado !!} <br />
                                @endforeach
                            </td>
                            <td>{!! $item->acc_descrip !!}</td>
                            <td>{!! $item->persona_responsable !!}</td>
                            <td>{!! $item->acc_observaciones !!}</td>
                            <td>
                                <a href="{!! route('patientHistories.edit', $item->id) !!}"
                                    class='btn btn-secondary btn-xs'>
                                    <i class="far fa-edit"></i>
                                </a>
                                @if ( in_array( Auth::user()->role_id,[1,3]) )
                                <button class="btn btn-xs btn-danger btn-delete btn-icon"
                                    data-remote="/patientHistories/{!!$item->id!!}" id="deleteHistory">
                                    <i class="far fa-trash-alt"></i> </button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="all"></th>
                            <th class="all"></th>
                            <th class="all"></th>
                            <th class="all"></th>
                            <th class="all"></th>
                            <th class="all"></th>
                            <th class="all"></th>
                            <th class="all"></th>
                            <th class="all"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    @include('flash::message')
</div>

<div class="side-filter p-4">
    <h3>Filtrar</h3>
    <div class="form-group">
        <label for="">Tipo Accion / Tarea</label>


        <select class="form-control status-dropdown">
            <option value="">Todo</option>
            @foreach($patient->patientHistory->pluck('acc_tipo_accion')->unique() as $item)
            @if( !$item == "" )
            <option value="{{$item}}">{{$item}}</option>
            @endif
            @endforeach



        </select>
    </div>

    <div class="form-group">
        <label for="">Subtipo Accion / Tarea</label>
        <select class="form-control status-dropdown2">
            <option value="">Todo</option>
            @foreach($patient->patientHistory->pluck('acc_subtipo_accion')->unique() as $item)
            @if( !$item == "" )
            <option value="{{$item}}">{{$item}}</option>
            @endif
            @endforeach
        </select>
    </div>

    <button class="open-filter text-center">
        Filtro
    </button>
</div>
@section('scripts')

@endsection


<script>
    //DETELE PATIENTS
    $('#history_table').on('click', '.btn-delete[data-remote]', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var url = $(this).data('remote');
        console.log(url);
        // confirm then
        if (confirm('CUIDADO!!! Vas a eliminar un historial definitivamente de la base de datos, ¿Estás de acuerdo?')) {
            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    method: '_DELETE',
                    submit: true
                }
            }).always(function(data) {
                $('#history_table').DataTable().draw(false);
                location.reload();
            });
        } else
            alert("Has cancelado la eliminación de la persona seleccionada");
    });


    

    $(document).ready(function() {
        $('.open-filter').on("click", function () {
        console.log("dfdf");
		    $('.side-filter').toggleClass("show-filter");
		});
		

        dataTable = $("#history_table").DataTable({
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
                    dom: '<"row tools-datatables" <"col-md-6 buttons-datatables" B> <"col-md-6 search-datatables d-flex align-items-center justify-content-end pr-3" f> > + rt + <"row" <"col-sm-12 col-md-5" p> <"col-sm-12 col-md-7 text-right" i> >',
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

        $('.status-dropdown').on('change', function(e){
            var status = $(this).val();
            $('.status-dropdown').val(status);
            dataTable.column(2).search(status).draw();

        })

        $('.status-dropdown2').on('change', function(e){
            var status = $(this).val();
            $('.status-dropdown').val(status);
            dataTable.column(3).search(status).draw();

        })

    } );


</script>
@endsection