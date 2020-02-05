<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Fecha Entrada</th>
            <th>Registro</th>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Dirección</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Fecha Entrada</th>
            <th>Registro</th>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Dirección</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
    @foreach($workerSessions as $workerSession)
        <tr>
            <td>{!! $workerSession->created_at !!}</td>
            <td>@if($workerSession->action == 'in') Entrada @else Salida @endif</td>
            <td>{!! $workerSession->latitud !!}</td>
            <td>{!! $workerSession->longitud !!}</td>
            <td>{!! $workerSession->direccion !!}</td>
            <td>
                {!! Form::open(['route' => ['workerSessions.destroy', $workerSession->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>