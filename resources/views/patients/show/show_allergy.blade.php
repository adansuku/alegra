<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
        <th>Alergia</th>
        <th>Observaciones</th>
    </thead>

    <tbody>
    @foreach($patient->patientAllergies as $item)
        <tr>
            <td>{!! implode(', ', (array)$item->alergia) !!}</td>
            <td>{!! $item->nombre_alergia !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
