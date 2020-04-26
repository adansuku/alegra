<table class="table datatables" width="100%" cellspacing="0">
    <thead class="thead-light">
        <tr>
            <th>Categoría</th>
            <th>Nombre</th>
            <th>Abrir / Descargar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patient->patientDocuments as $item)
        <tr>
            <td>{!! $item->cat_documentos !!}</td>
            <td>{!! $item->nombre_doc !!}</td>

            <td>
                <a class="btn btn-secondary btn-xs" href="{{ asset("storage/$item->url") }}" target="_blank">
                    <i class="fas fa-download"></i>
                </a>
                <a href="/deletedocument/{{$item->id}}" data-token="{{csrf_token()}}" class='btn btn-danger btn-xs'
                data-confirm="Seguro que quieres eliminar este pia?" 
                onclick="return confirm('¿Estas segura que quieres el documento?')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>