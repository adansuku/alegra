<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Antecedentes</th>
        <th>Antecedentes Obs</th>
        <th>Antecedentes Anio</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Antecedentes</th>
        <th>Antecedentes Obs</th>
        <th>Antecedentes Anio</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($patientPasts as $patientPast)
        <tr>
            <td>{!! $patientPast->antecedentes !!}</td>
            <td>{!! $patientPast->antecedentes_obs !!}</td>
            <td>{!! $patientPast->antecedentes_anio !!}</td>
            <td>{!! $patientPast->patient_id !!}</td>
            <td>
                {!! Form::open(['route' => ['patientPasts.destroy', $patientPast->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('patientPasts.show', [$patientPast->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('patientPasts.edit', [$patientPast->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>