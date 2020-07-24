<table class="table " id="" width="100%" cellspacing="0">
    <thead class="table-primary text-dark">
        <tr>
        <th>Categoria</th>
        <th>Tipo</th>
        <th>Respuesta</th>
        <th>Observaciones</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($worker->workerHistories as $item)
        <tr>
            <td>{!! $item->his_categoria !!}</td>
            <td>{!! $item->his_tipo !!}</td>
            <td>{!! $item->his_respuesta !!}</td>
            <td>{!! $item->his_observaciones !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>


