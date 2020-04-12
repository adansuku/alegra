@foreach($patient->patientSpapd as $patientSpapd)
    <table class="table" width="100%" cellspacing="0">
        <thead class="thead-light">
            <tr>
                <th width="10%">Programa</th>
                <th width="40%">Numero de sesiones Totales en el programa</th>
                <th width="20%">Duración de la sesión</th>
                <th width="15%">Trabajador asignado</th>
                <th width="20%">Acción</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>
                    @if ($patientSpapd->prog_spapd == "Otros")
                    {{$patientSpapd->otros_programa}}
                    @else
                    {{$patientSpapd->prog_spapd}}
                    @endif
                </td>

                <td style="text-align:center;">{!! $patientSpapd->num_sesiones !!}</td>

                <td style="text-align:center;">
                    @if ($patientSpapd->dur_spapd == "Otros")
                    {{$patientSpapd->otras_sesiones}}
                    @else
                    {{$patientSpapd->dur_spapd}}
                    @endif

                </td>

                <td style="text-align:center;">
                    @foreach($workers as $worker)
                        @if( $patientSpapd->worker_id == $worker->id)
                        {{$worker->nombre}} {{$worker->apellido}}
                        @endif
                    @endforeach

                    {!! $patientSpapd->worker_id !!}
                </td>

                <td>
                    <div class='btn-group'>
                        <button type="button" class="btn btn-secondary btn-xs spapd_add_day" data-title='@if ($patientSpapd->prog_spapd == "Otros") {{ $patientSpapd->otros_programa }} @else {{ $patientSpapd->prog_spapd }} @endif' data-id="{{ $patientSpapd->id }}">
                            <i class="fas fa-plus"></i> 
                        </button>
                        <a href="{!! route('patientSpapds.edit', [$patientSpapd->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>

                        <a href="/spapddelete/{{$patientSpapd->id}}" data-token="{{csrf_token()}}" class='btn btn-block btn-danger btn-xs' onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
                            <i class="fas fa-trash"></i> Eliminar
                        </a>

                    </div>
                </td>
            </tr>
            
        </tbody>
    </table>
    <table class="table" width="100%" cellspacing="0">
        <thead>
            @foreach($patientSpapd->patient_spapd_dias as $psd)
                <tr>
                    <td width="10%">Dia</th>
                    <td width="20%">{{ $psd->dia_spapd }}</th>
                    <td width="10%">Inicio</th>
                    <td width="20%">{{ $psd->fecha_inicio }}</th>
                    <td width="20%" style="text-align:right;">
                        <a href="{{ url('/spapddiadelete') }}/{{$psd->id}}" data-token="{{csrf_token()}}" class='btn btn-danger btn-xs' onclick="return confirm('¿Estas seguro(a) que quieres eliminar el spapd?')">
                            <i class="fas fa-trash"></i> Eliminar
                        </a>
                    </th>
                </tr>
            @endforeach
        </thead>
        <tbody>
    </table>
@endforeach