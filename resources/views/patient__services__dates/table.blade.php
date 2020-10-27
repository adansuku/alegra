<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Dia Servicio</th>
        <th>Horario Servicio</th>
        <th>Obs Servicio</th>
        <th>Service Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Dia Servicio</th>
        <th>Horario Servicio</th>
        <th>Obs Servicio</th>
        <th>Service Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($patientServicesDates as $patientServicesDate)
        <tr>
            <td>{!! $patientServicesDate->dia_servicio !!}</td>
            <td>{!! $patientServicesDate->horario_servicio !!}</td>
            <td>{!! $patientServicesDate->obs_servicio !!}</td>
            <td>{!! $patientServicesDate->service_id !!}</td>
            <td>
                {!! Form::open(['route' => ['patientServicesDates.destroy', $patientServicesDate->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('patientServicesDates.show', [$patientServicesDate->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('patientServicesDates.edit', [$patientServicesDate->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>