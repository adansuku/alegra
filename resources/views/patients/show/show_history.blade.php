<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th width="15%">Fecha Registro</th>
            <th width="15%">Fecha de la acción</th>
            <th width="20%">Tipo Acción/Tarea</th>
            <th width="10%">Subtipo Acción/Tarea</th>
            <th width="10%">Destinado a</th>
            <th width="10%">Descripción</th>
            <th width="19%">Profesional Responsable</th>
            <th width="1%">Observaciones</th>
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