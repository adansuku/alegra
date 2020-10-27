<table class="table display table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Fecha Limite</th>
        <th>Fecha Real</th>
        <th>Tipo Pia</th>
        <th>Url Pia</th>
        <th>Obs Pia</th>

            <th>Acción</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Fecha Limite</th>
        <th>Fecha Real</th>
        <th>Tipo Pia</th>
        <th>Url Pia</th>
        <th>Obs Pia</th>
        <th>Patient Id</th>
            <th>Acción</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($patientPias as $patientPia)
        <tr>
            <td>{!! $patientPia->fecha_limite !!}</td>
            <td>{!! $patientPia->fecha_real !!}</td>
            <td>{!! $patientPia->tipo_pia !!}</td>
            <td>{!! $patientPia->url_pia !!}</td>
            <td>{!! $patientPia->obs_pia !!}</td>
            <td>{!! $patientPia->patient_id !!}</td>
            <td>
      
                <div class='btn-group'>
                    <a href="{!! route('patientPias.show', [$patientPia->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('patientPias.edit', [$patientPia->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>