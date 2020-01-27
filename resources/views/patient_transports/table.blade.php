<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Dia Trans</th>
        <th>Dom Recogida</th>
        <th>Tray Trans</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Dia Trans</th>
        <th>Dom Recogida</th>
        <th>Tray Trans</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($patientTransports as $patientTransport)
        <tr>
            <td>{!! $patientTransport->dia_trans !!}</td>
            <td>{!! $patientTransport->dom_recogida !!}</td>
            <td>{!! $patientTransport->tray_trans !!}</td>
            <td>{!! $patientTransport->patient_id !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('patientTransports.show', [$patientTransport->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('patientTransports.edit', [$patientTransport->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>