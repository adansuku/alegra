<table class="table " width="100%" cellspacing="0">
    <!-- class="datatables" -->

    <thead class="thead-light">
        <tr>
            <th>Patología</th>
            <th>Observaciones</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($patient->patientPatologies as $item)
        <tr>
            <td>{!! implode(', ', (array)$item->patologia) !!}</td>
            <td>{!! $item->nombre_pat !!}</td>
            <td class="text-right">
                @if ( in_array(Auth::user()->role_id,[1,3]) )
                <a href="/deletepatology/{{$item->id}}" data-token="{{csrf_token()}}" class='btn btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?" onclick="return confirm('¿Estas segura que quieres el documento?')">
                    <i class="fas fa-trash"></i>
                </a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>