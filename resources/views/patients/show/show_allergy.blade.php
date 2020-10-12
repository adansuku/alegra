<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
        <th>Alergia</th>
        <th>Observaciones</th>
        <th></th>
    </thead>

    <tbody>
    @foreach($patient->patientAllergies as $item)
        <tr>
            <td>{!! implode(', ', (array)$item->alergia) !!}</td>
            <td>{!! $item->nombre_alergia !!}</td>
            <td class="text-right">
                <a href="/deleteallergy/{{$item->id}}" data-token="{{csrf_token()}}" class='btn btn-danger btn-xs'
                    data-confirm="Seguro que quieres eliminar este pia?" 
                    onclick="return confirm('¿Estas segura que quieres el documento?')">
                        <i class="fas fa-trash"></i>
                    </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
