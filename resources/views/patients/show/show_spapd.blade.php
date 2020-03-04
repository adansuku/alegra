<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Programa</th>
            <th>Duración de la sesión</th>
            <th>Días</th>
            <th>Inicio</th>
            <th>Trabajador asignado</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>


        @foreach($patient->patientSpapd as $patientSpapd)

        <tr>
            <td>
                @if ($patientSpapd->prog_spapd == "Otros")
                {{$patientSpapd->otros_programa}}
                @else
                {{$patientSpapd->prog_spapd}}
                @endif
            </td>

            {{-- <td>{!! $patientSpapd->num_sesiones !!}</td> --}}

            <td>
                @if ($patientSpapd->dur_spapd == "Otros")
                {{$patientSpapd->otras_sesiones}}
                @else
                {{$patientSpapd->dur_spapd}}
                @endif

            </td>

            <td>
                @foreach($patientSpapd->dia_spapd as $item)
                <span class="bg-dark py-1 px-2 text-white">{{$item}}</span>
                @endforeach
            </td>

            <td>{!! $patientSpapd->fecha_inicio !!}</td>
            <td>
                @foreach($workers as $worker)
                @if ($worker->id == $patientSpapd->worker_id)
                {{$worker->nombre}} {{$worker->apellido}}
                @endif
                @endforeach


            </td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('patientSpapds.edit', [$patientSpapd->id]) !!}" class='btn btn-primary btn-xs'><i
                            class="far fa-edit"></i></a>

                    <a href="/spapddelete/{{$patientSpapd->id}}" data-token="{{csrf_token()}}"
                        class='btn btn-block btn-danger btn-xs'
                        onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
                        <i class="fas fa-trash"></i> Eliminar
                    </a>

                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>