<table class="table datatables dark" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th>Antecedentes</th>
            <th>Año</th>
            <th>Observaciones</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patient->patientPasts as $patientPast)
        <tr>
            <td>{!! $patientPast->antecedentes !!}</td>
            <td>
                {{ date('d/m/Y', strtotime($patientPast->antecedentes_anio)) }}
            </td>
            <td>{!! $patientPast->antecedentes_obs !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="/pastdelete/{{$patientPast->id}}" data-token="{{csrf_token()}}" class='btn btn-block btn-danger btn-xs' data-confirm="Seguro que quieres eliminar este pia?" onclick="return confirm('¿Estas segura que quieres eliminar el antecedente?')">
                        <i class="fas fa-trash"></i> Eliminar
                    </a> </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>