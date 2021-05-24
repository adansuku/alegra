<div class="row">
    @php $sesiones = 0; @endphp

    @foreach($patient->patientSpapd as $patientSpapd)
    @php $sesiones = (double)$sesiones + (double)$patientSpapd->num_sesiones ;

    @endphp
    @endforeach
    <div class="col-sm-6 text-left d-flex align-items-center ">
        <div class="bg-secondary p-2">
            <strong>Número total de sesiones contratadas:</strong> {{$sesiones}}
        </div>
    </div>

    <div class="col-lg-6">
        <button type="button" class="btn btn-secondary my-3 float-right" data-toggle="modal" data-target="#spapd_modal">
            Añadir programa <i class="fas fa-plus"></i>
        </button>
    </div>

</div>

<div class="row">
    @foreach($patient->patientSpapd as $patientSpapd)
    <div class="col-sm-6 pb-4">
        <div class="card">
            <div class="card-header row m-0" id="headingOne">
                <div class="col-sm-6 p-0">

                    <h5 class="mb-1">
                        <strong>
                            @if ($patientSpapd->prog_spapd == "Otros")
                            {{$patientSpapd->otros_programa}}
                            @else
                            {{$patientSpapd->prog_spapd}}
                            @endif
                        </strong>
                    </h5>


                    <strong>Sesiones: </strong> {!! $patientSpapd->num_sesiones !!}
                    <br />
                    <strong>Trabajadora: </strong>
                    @foreach($workers as $worker)
                    @if( $patientSpapd->worker_id == $worker->id)
                    {{$worker->nombre}} {{$worker->apellido}}
                    @endif
                    @endforeach
                    @if($patientSpapd->prog_spapd == "PHAF ALIVIA")
                        @if($patientSpapd->patient_spapd_dates->count() > 0)
                            <br />
                            <strong>Fecha entrada: </strong>{{ date("d/m/Y", strtotime($patientSpapd->patient_spapd_dates->first()->fecha_entrada)) }}<br />
                            <strong>Fecha salida: </strong>{{ date("d/m/Y", strtotime($patientSpapd->patient_spapd_dates->first()->fecha_salida )) }}<br />
                        @endif
                    @endif
                </div>

                <div class="col-sm-6 p-0 text-right">
                    @if($patientSpapd->prog_spapd == "PHAF ALIVIA")
                        <button type="button" class="btn btn-secondary btn-xs spapd_add_dates"
                            data-title='{{ $patientSpapd->prog_spapd }}'
                            data-id="{{ $patientSpapd->id }}">
                            <i class="fas fa-plus"></i>
                        </button>
                    @else
                        <button type="button" class="btn btn-secondary btn-xs spapd_add_day"
                            data-title='@if ($patientSpapd->prog_spapd == "Otros") {{ $patientSpapd->otros_programa }} @else {{ $patientSpapd->prog_spapd }} @endif'
                            data-id="{{ $patientSpapd->id }}">
                            <i class="fas fa-plus"></i>
                        </button>
                    @endif
                    <a href="{!! route('patientSpapds.edit', [$patientSpapd->id]) !!}" class='btn btn-primary btn-xs'><i
                            class="far fa-edit"></i></a>

                    <a href="/spapddelete/{{$patientSpapd->id}}" data-token="{{csrf_token()}}"
                        class='btn btn-danger btn-xs'
                        onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>



            </div>

            @if (!empty( $patientSpapd->patient_spapd_dias[0] ))

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">

                    <table width="100%">
                        <tr>
                            <th>Día</th>
                            <th>Duración</th>
                            <th>Inicio</th>
                            <th></th>
                        </tr>
                        @foreach($patientSpapd->patient_spapd_dias as $psd)
                        <tr style="height: 50px; border-bottom: 1px solid lightgrey;">
                            <td width="20%">{{ $psd->dia_spapd }}</td>
                            <td width="25%">{{ $psd->duracion_spapd }} min</td>
                            <td width="45%">{{ $psd->fecha_inicio }}</th>
                            </td>
                            <td width="10%" style="text-align:right;">
                                <a href="{{ url('/spapddiadelete') }}/{{$psd->id}}" data-token="{{csrf_token()}}"
                                    class='btn btn-danger btn-xs'
                                    onclick="return confirm('¿Estas seguro(a) que quieres eliminar el spapd?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>


                </div>
            </div>
            @endif
        </div>
    </div>
    @endforeach
</div>