<table class="table " width="100%" cellspacing="0">
    <!-- class="datatables" -->
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
                @if ( in_array(Auth::user()->role_id,[1,3]) )
                <a href="/deleteallergy/{{$item->id}}" data-token="{{csrf_token()}}" class='btn btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?" onclick="return confirm('¿Estas segura que quieres el documento?')">
                    <i class="fas fa-trash"></i>
                </a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>