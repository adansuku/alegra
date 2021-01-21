<table class="table" width="100%" cellspacing="0">
    <!-- class="datatables" -->
    <thead class="thead-light">
        <tr>
            <th>Diagnóstico</th>
            <th>Diagnostico Concreto</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($patient->patientDiagnostics as $item)
        <tr>
            <td>{!! $item->diagnostico !!}</td>
            <td>{!! implode(', ', (array)$item->diagnos_concreto) !!}</td>
            <td class="text-right">
                @if ( in_array(Auth::user()->role_id,[1,3]) )
                <a href="/deletediagnostic/{{$item->id}}" data-token="{{csrf_token()}}" class='btn btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?" onclick="return confirm('¿Estas segura que quieres el documento?')">
                    <i class="fas fa-trash"></i>
                </a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>