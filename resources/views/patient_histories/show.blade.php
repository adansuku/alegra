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
                'POST']) !!}
                @include('patients.create.history')
                {!! Form::close() !!}

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
            <div class="col-md-6">
                <div class="float-sm-right">
                    <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal"
                        data-target="#history_modal" data-id={{$patient->id}}>
                        Añadir historial <i class="fas fa-file-upload"></i>
                </div>
            </div>

            <div class="col-sm-12 py-3">
                <table class="table datatables bg-white " width="100%" cellspacing="0" id="history_table">
                    <thead class="thead-light">
                        <tr>
                            <th class="all">Fecha Registro</th>
                            <th class="all">Fecha de la acción</th>
                            <th class="all">Tipo Acción/Tarea</th>
                            <th class="all">Subtipo Acción/Tarea</th>
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
                                <a href="{!! route('patientHistories.edit', [$item->id]) !!}"
                                    class='btn btn-secondary btn-xs'>
                                    <i class="far fa-edit"></i>
                                </a>
                                {{--
                                <a href="{!! route('patientPias.edit', [$patientPia->id]) !!}" class='btn  btn-secondary btn-xs'>
                                    <i class="far fa-edit"></i>
                                </a> --}} {{--
                                <a href="/carerdelete/{{$item->id}}" data-token="{{csrf_token()}}" class='btn
                                btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?" onclick="return
                                confirm('¿Estas segura que quieres eliminar la persona de referencia?')">
                                <i class="fas fa-trash"></i>
                                </a> --}} {{--
                                <a href="/piadelete/{{$$item->id}}" data-token="{{csrf_token()}}" class='btn btn-danger
                                btn-xs' data-confirm="Seguro que quieres eliminar este pia?" onclick="return
                                confirm('¿Estas segura que
                                quieres
                                eliminar el pia?')">
                                <i class="fas fa-trash"></i>
                                </a> --}}



                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="clearfix"></div>
        @include('flash::message')
    </div>





</div>
@endsection