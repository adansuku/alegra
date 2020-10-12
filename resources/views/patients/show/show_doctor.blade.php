<table class="table datatables" width="100%" cellspacing="0">
<thead class="thead-light">
        <tr>
            <th>Nombre Doctor</th>
        <th>Observaciones Doctor</th>
  
        </tr>
    </thead>
    <tbody>
    @foreach($patient->patientDoctors as $item)
        <tr>
            <td>{!! $item->nombre_doctor !!}</td>
            <td>{!! $item->observaciones_doctor !!}</td>
      
        </tr>
    @endforeach
    </tbody>
</table>