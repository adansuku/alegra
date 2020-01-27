<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nom Servicio</th>
        <th>Municipio Serv</th>
        <th>Tipo Plaza Serv</th>
        <th>Plaza Privada Serv</th>
        <th>Plaza Sub Serv</th>
        <th>Fecha Form Serv</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nom Servicio</th>
        <th>Municipio Serv</th>
        <th>Tipo Plaza Serv</th>
        <th>Plaza Privada Serv</th>
        <th>Plaza Sub Serv</th>
        <th>Fecha Form Serv</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($patientServices as $patientService)
        <tr>
            <td>{!! $patientService->nom_servicio !!}</td>
            <td>{!! $patientService->municipio_serv !!}</td>
            <td>{!! $patientService->tipo_plaza_serv !!}</td>
            <td>{!! $patientService->plaza_privada_serv !!}</td>
            <td>{!! $patientService->plaza_sub_serv !!}</td>
            <td>{!! $patientService->fecha_form_serv !!}</td>
            <td>{!! $patientService->patient_id !!}</td>
            <td>
                {!! Form::open(['route' => ['patientServices.destroy', $patientService->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('patientServices.show', [$patientService->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('patientServices.edit', [$patientService->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>