<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Fecha Entrada</th>
        <th>Fecha Salida</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Dirección</th>
        <th>Observaciones</th>
        <th>Worker Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Fecha Entrada</th>
        <th>Fecha Salida</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Dirección</th>
        <th>Observaciones</th>
        <th>Worker Id</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($workerTimes as $workerTime)
        <tr>
            <td>{!! $workerTime->fecha_entrada !!}</td>
            <td>{!! $workerTime->fecha_salida !!}</td>
            <td>{!! $workerTime->latitud !!}</td>
            <td>{!! $workerTime->longitud !!}</td>
            <td>{!! $workerTime->dirección !!}</td>
            <td>{!! $workerTime->observaciones !!}</td>
            <td>{!! $workerTime->worker_id !!}</td>
            <td>
                {!! Form::open(['route' => ['workerTimes.destroy', $workerTime->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('workerTimes.show', [$workerTime->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-eye"></i></a>
                    <a href="{!! route('workerTimes.edit', [$workerTime->id]) !!}" class='btn btn-primary btn-xs'><i class="far fa-edit"></i></a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>