<table class="table " width="100%" cellspacing="0" id="history_table">
    <thead class="thead-light">
        <tr>
            <th >Fecha Registro</th>
            <th >Fecha de la acción</th>
            <th >Tipo Acción/Tarea</th>
            <th >Subtipo Acción/Tarea</th>
            <th >Destinado a</th>
            <th >Descripción</th>
            <th >Profesional Responsable</th>
            <th >Observaciones</th>
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
                    @foreach($item->destinado_a as $item_destinado)
                    - {!! $item_destinado !!} <br/>
                    @endforeach
                </td>
                <td>{!! $item->acc_descrip !!}</td>
                <td>{!! $item->persona_responsable !!}</td>
                <td>{!! $item->acc_observaciones !!}</td>
            </tr>
        @endforeach
    </tbody>
</table>