<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Dias</th>
        <th>Domicilio</th>
        <th>Trayecto</th>
      
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($patient->patientTransport as $patientTransport)
        <tr>
            <td>{!! $patientTransport->dia_trans !!}</td>
            <td>{!! $patientTransport->dom_recogida !!}</td>
            <td>{!! $patientTransport->tray_trans !!}</td>
            <td>
                <div class='btn-group'>
                <a href="/transportdelete/{{$patientTransport->id}}" 
                data-token="{{csrf_token()}}" 
                class='btn btn-block btn-danger btn-xs' 
                data-confirm="Seguro que quieres eliminar este pia?" 
                onclick="return confirm('¿Estas segura que quieres eliminar el servicio?')">
                <i class="fas fa-trash"></i> Eliminar
                </a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>