<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            ó
        <th>Pauta Medicacion</th>
        <th>Obs Medicacion</th>
        <th>Patient Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($patientMedications as $patientMedication)
        <tr>
            <td>{!! $patientMedication->medicacion !!}</td>
            <td>{!! $patientMedication->pauta_medicacion !!}</td>
            <td>{!! $patientMedication->obs_medicacion !!}</td>
            <td>{!! $patientMedication->patient_id !!}</td>
            <td>
                {!! Form::open(['route' => ['patientMedications.destroy', $patientMedication->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('patientMedications.show', [$patientMedication->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('patientMedications.edit', [$patientMedication->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>