<table class="table datatables" width="100%" cellspacing="0">

    <thead class="thead-light">
        <tr>
            <th>Patología</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($patient->patientPatologies as $item)
        <tr>
            <td>{!! implode(', ', (array)$item->patologia) !!}</td>
            <td>{!! $item->nombre_pat !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
