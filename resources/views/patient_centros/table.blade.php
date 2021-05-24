<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Prog Centro</th>
            <th>Num Sesiones</th>
            <th>Worker Id</th>
            <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Prog Centro</th>
            <th>Num Sesiones</th>
            <th>Worker Id</th>
            <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($patientCentros as $pc)
        <tr>
            <td>{!! $pc->prog_centro !!}</td>
            <td>{!! $pc->num_sesiones !!}</td>
            <td>{!! $pc->worker_id !!}</td>
            <td>{!! $pc->patient_id !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('patientCentro.show', [$pc->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('patientCentro.edit', [$pc->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>