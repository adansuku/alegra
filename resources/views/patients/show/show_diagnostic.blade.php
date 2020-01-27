<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Diagnóstico</th>
            <th>Diagnostico Concreto</th>
        </tr>
    </thead>
    <tbody>
    @foreach($patient->patientDiagnostics as $item)
        <tr>
            <td>{!! $item->diagnostico !!}</td>
            <td>{!! implode(', ', (array)$item->diagnos_concreto) !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
