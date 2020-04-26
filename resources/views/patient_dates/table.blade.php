<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Fecha</th>
        <th>Desc Fecha Paciente</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Fecha Paciente</th>
        <th>Desc Fecha Paciente</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($patientDates as $patientDate)
        <tr>
            <td>{!! $patientDate->fecha_paciente !!}</td>
            <td>{!! $patientDate->desc_fecha_paciente !!}</td>
            <td>{!! $patientDate->patient_id !!}</td>
            <td>
                {!! Form::open(['route' => ['patientDates.destroy', $patientDate->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('patientDates.show', [$patientDate->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('patientDates.edit', [$patientDate->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>