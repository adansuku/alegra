<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Tipo Pia</th>
            <th>Fecha máx. Elaboración y Entrega</th>
            <th>Fecha Real Elaboración Completa</th>
            <th>Fecha Real Entrega</th>
            <th>Éxito PIA</th>
            <th>Informe PIA</th>
            <th>Documento Recepción PIA</th>
            <th>Observaciones</th>
            <th>Acción</th>
        </tr>
    </thead>

    <tbody>

        @foreach($patient->patientPia as $patientPia)

        <td>
            {!! $patientPia->tipo_pia !!}

        </td>

        @php $fecha_limite = strtotime($patientPia->fecha_limite); $newformat = date('d/m/Y',$fecha_limite); echo '
        <td data-sort="'. $fecha_limite .'">'.$newformat .'</td>'; @endphp

        <td>
            @if($patientPia->fecha_real != NULL ) {{ date('d/m/Y', strtotime($patientPia->fecha_real)) }} @endif
        </td>

        <td>

            @if($patientPia->fecha_real_entrega != NULL )
            {{ date('d/m/Y', strtotime($patientPia->fecha_real_entrega)) }} @endif
        </td>


        <td>
            @php $inicio = \Carbon\Carbon::parse('2020-12-31') ; $fecha_real =
            \Carbon\Carbon::parse($patientPia->fecha_real) @endphp @if ($patientPia->fecha_real != NULL) @if($inicio >
            $fecha_real)
            <div style="background: green; text-align: center; color: white">Éxito</div>
            @else @if ($patientPia->fecha_limite >= $patientPia->fecha_real)
            <div style="background: green;text-align: center; color: white">Éxito</div>
            @else
            <div style="background: red; text-align: center; color: white">Fracaso</div>
            @endif @endif @endif
        </td>

        <td>
            @if($patientPia->url_pia == null ) Pia no disponible @else

            <a href="{{ asset("storage/$patientPia->url_pia") }}" target="_blank">
                <i class="fas fa-download"></i> Ver documento
            </a> @endif
        </td>


        <td>
            @if($patientPia->url_recepcion == null ) Pia recepción no disponible @else

            <a href="{{ asset("storage/$patientPia->url_recepcion") }}" target="_blank">
                <i class="fas fa-download"></i> Ver documento
            </a> @endif
        </td>


        <td>

            @php $today = Carbon\Carbon::now(); if ($today
            < $patientPia->fecha_limite){ echo '
                <div class="bg-secondary p-1">Pia en vigor</div>'; } @endphp {!! $patientPia->obs_pia !!}
        </td>

        <td>
            <a href="{!! route('patientPias.edit', [$patientPia->id]) !!}" class='btn  btn-secondary btn-xs'>
                <i class="far fa-edit"></i>
            </a>

            @if ( $patientPia->tipo_pia != 'Inicial')
            <a href="/piadelete/{{$patientPia->id}}" data-token="{{csrf_token()}}" class='btn  btn-danger btn-xs'
                data-confirm="Seguro que quieres eliminar este pia?"
                onclick="return confirm('¿Estas segura que quieres eliminar el pia?')">
                <i class="fas fa-trash"></i>
            </a>
            @endif


        </td>
        </tr>
        @endforeach
    </tbody>
</table>