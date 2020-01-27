<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Fecha Registro</th>
            <th>Fecha realizacion</th>
            <th>Tipo Acción/Tarea</th>
            <th>Subtipo Acción/Tarea</th>
            <th>Profesional Responsable</th>
            <th>Descripción</th>
            <th>Observaciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($patient->patientHistory as $item)
        <tr>
            <td>{!! $item->acc_fecha_reg !!}</td>
            <td>{!! $item->acc_fecha_realiz !!}</td>
            <td>{!! $item->acc_tipo_accion !!}</td>
            <td>{!! $item->acc_subtipo_accion !!}</td>
            <td>{!! $item->acc_woker_accion !!}</td>
            <td>{!! $item->acc_descrip !!}</td>
            <td>{!! $item->acc_observaciones !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
