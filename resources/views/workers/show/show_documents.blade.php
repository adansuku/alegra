<!-- Muestra los documentos adjuntos a este usuario -->
<table class="table display" id="" width="100%" cellspacing="0">
    <thead class="table-primary text-dark">
        <tr>
            <th width="45%">Categoría</th>
            <th width="45%">Nombre</th>
            <th width="10%">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $worker->workerDocuments as $item)
        <tr>
            <td>
                {{$item->cat_documentos}}
            </td>
            <td>
                <a href="{{ asset(" storage/$item->url") }}" target="_blank">
                    {{$item->nombre_documento}}
                </a>
            </td>
            <td class="text-center">
                <a href="{{ asset(" storage/$item->url") }}" target="_blank">
                    <i class="fas fa-download"></i>
                </a> |
                <a href="/workerdocumentdelete/{{$item->id}}" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>