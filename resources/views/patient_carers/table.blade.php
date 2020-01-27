<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>Parentesco</th>
        <th>Dni</th>
        <th>Fecha Nac Care</th>
        <th>Direccion Care</th>
        <th>Tel Care</th>
        <th>Movil Care</th>
        <th>Email Care</th>
        <th>Whatsapp</th>
        <th>Sit Laboral</th>
        <th>Trabajo Care</th>
        <th>Ano Care</th>
        <th>Sit Apoyo</th>
        <th>Cesion Care</th>
        <th>Contactar Para</th>
        <th>Es Referencia</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>Parentesco</th>
        <th>Dni</th>
        <th>Fecha Nac Care</th>
        <th>Direccion Care</th>
        <th>Tel Care</th>
        <th>Movil Care</th>
        <th>Email Care</th>
        <th>Whatsapp</th>
        <th>Sit Laboral</th>
        <th>Trabajo Care</th>
        <th>Ano Care</th>
        <th>Sit Apoyo</th>
        <th>Cesion Care</th>
        <th>Contactar Para</th>
        <th>Es Referencia</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($patientCarers as $patientCarer)
        <tr>
            <td>{!! $patientCarer->nombre !!}</td>
            <td>{!! $patientCarer->apellido !!}</td>
            <td>{!! $patientCarer->parentesco !!}</td>
            <td>{!! $patientCarer->dni !!}</td>
            <td>{!! $patientCarer->fecha_nac_care !!}</td>
            <td>{!! $patientCarer->direccion_care !!}</td>
            <td>{!! $patientCarer->tel_care !!}</td>
            <td>{!! $patientCarer->movil_care !!}</td>
            <td>{!! $patientCarer->email_care !!}</td>
            <td>{!! $patientCarer->whatsapp !!}</td>
            <td>{!! $patientCarer->sit_laboral !!}</td>
            <td>{!! $patientCarer->trabajo_care !!}</td>
            <td>{!! $patientCarer->ano_care !!}</td>
            <td>{!! $patientCarer->sit_apoyo !!}</td>
            <td>{!! $patientCarer->cesion_care !!}</td>
            <td>{!! $patientCarer->contactar_para !!}</td>
            <td>{!! $patientCarer->es_referencia !!}</td>
            <td>{!! $patientCarer->patient_id !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('patientCarers.show', [$patientCarer->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('patientCarers.edit', [$patientCarer->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>