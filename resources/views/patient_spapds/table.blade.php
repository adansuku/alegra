<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Prog Spapd</th>
        <th>Otros Programa</th>
        <th>Num Sesiones</th>
        <th>Otras Sesiones</th>
        <th>Dur Spapd</th>
        <th>Worker Id</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Prog Spapd</th>
        <th>Otros Programa</th>
        <th>Num Sesiones</th>
        <th>Otras Sesiones</th>
        <th>Dur Spapd</th>
        <th>Worker Id</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($patientSpapds as $patientSpapd)
        <tr>
            <td>{!! $patientSpapd->prog_spapd !!}</td>
            <td>{!! $patientSpapd->otros_programa !!}</td>
            <td>{!! $patientSpapd->num_sesiones !!}</td>
            <td>{!! $patientSpapd->otras_sesiones !!}</td>
            <td>{!! $patientSpapd->dur_spapd !!}</td>
            <td>{!! $patientSpapd->worker_id !!}</td>
            <td>{!! $patientSpapd->patient_id !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('patientSpapds.show', [$patientSpapd->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('patientSpapds.edit', [$patientSpapd->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>