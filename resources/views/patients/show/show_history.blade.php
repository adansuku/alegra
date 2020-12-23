<table class="table datatables" width="100%" cellspacing="0" id="history_table">
    <thead class="thead-light">
        <tr>
            <th class="all">Fecha Registro</th>
            <th class="all">Fecha de la acción</th>
            <th class="all">Tipo Acción/Tarea</th>
            <th class="none">Subtipo Acción/Tarea</th>
            <th class="all">Destinado a</th>
            <th class="none">Descripción</th>
            <th class="all">Profesional Responsable</th>
            <th class="none">Observaciones</th>
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
                @foreach($item->destinado_a as $item_destinado) - {!! $item_destinado !!} <br /> @endforeach
            </td>
            <td>{!! $item->acc_descrip !!}</td>
            <td>{!! $item->persona_responsable !!}</td>
            <td>{!! $item->acc_observaciones !!}</td>
            <td>
                <a href="{!! route('patientHistories.edit', [$item->id]) !!}" class='btn btn-secondary btn-xs'>
                    <i class="far fa-edit"></i>
                </a>
                {{-- <a href="{!! route('patientPias.edit', [$patientPia->id]) !!}" class='btn  btn-secondary btn-xs'>
                    <i class="far fa-edit"></i>
                </a> --}}

                {{-- <a href="/carerdelete/{{$item->id}}"
                data-token="{{csrf_token()}}"
                class='btn btn-danger btn-xs'
                data-confirm="Seguro que quieres eliminar este pia?"
                onclick="return confirm('¿Estas segura que quieres eliminar la persona de referencia?')">
                <i class="fas fa-trash"></i>
                </a> --}}



                {{--
                <a href="/piadelete/{{$$item->id}}" data-token="{{csrf_token()}}" class='btn btn-danger btn-xs'
                data-confirm="Seguro que quieres eliminar este pia?" onclick="return confirm('¿Estas segura que quieres
                eliminar el pia?')">
                <i class="fas fa-trash"></i>
                </a> --}}



            </td>
        </tr>
        @endforeach
    </tbody>
</table>