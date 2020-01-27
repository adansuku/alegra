<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre Doctor</th>
        <th>Observaciones Doctor</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre Doctor</th>
        <th>Observaciones Doctor</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($patientDoctors as $patientDoctor)
        <tr>
            <td>{!! $patientDoctor->nombre_doctor !!}</td>
            <td>{!! $patientDoctor->observaciones_doctor !!}</td>
            <td>{!! $patientDoctor->patient_id !!}</td>
            <td>
                {!! Form::open(['route' => ['patientDoctors.destroy', $patientDoctor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('patientDoctors.show', [$patientDoctor->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('patientDoctors.edit', [$patientDoctor->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>