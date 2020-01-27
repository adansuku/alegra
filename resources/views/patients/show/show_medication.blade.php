<table class="table datatables dark" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th>Medicación</th>
            <th>Pauta Medicacion</th>
            <th>Observaciones</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patient->patientMedications as $patientMedication)
        <tr>
            <td>{!! $patientMedication->medicacion !!}</td>
            <td>{!! $patientMedication->pauta_medicacion !!}</td>
            <td>{!! $patientMedication->obs_medicacion !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="/medicationdelete/{{$patientMedication->id}}" 
                    data-token="{{csrf_token()}}" 
                    class='btn btn-block btn-danger btn-xs' 
                    onclick="return confirm('¿Estas segura que quieres eliminar el la medicación?')">
                        <i class="fas fa-trash"></i> Eliminar
                    </a>

                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>