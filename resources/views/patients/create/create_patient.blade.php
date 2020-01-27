<div class="row">

    <div class="form-group col-sm-6">
        {!! Form::label('numero_expediente', 'Numero Expediente:') !!}
        {!! Form::text('numero_expediente', $numero_expediente, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
    </div>

    <!-- Fecha Alta Paciente Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fecha_alta_paciente', 'Fecha Alta:') !!}
        {!! Form::date('fecha_alta_paciente', null, ['class' => 'form-control','id'=>'fecha_alta_paciente', 'required' => 'required']) !!}
    </div>

    @section('scripts')
    <script type="text/javascript">
        $('#fecha_alta_paciente').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false
        })
    </script>
    @endsection
</div>

<div class="row">
    <!-- Nombre Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('nombre', 'Nombre:') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required' ]) !!}
    </div>

    <!-- Apellido Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('apellido', 'Apellido:') !!}
        {!! Form::text('apellido', null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('worker_id', 'Trabajadora social gestora del caso:') !!}
        <select class="form-control" id="worker_id" name="worker_id" required>
            @foreach($workers as $worker)
                @if ($worker->cat_profesional == 'Trabajadora Social')
                <option value="{{$worker->id}}">{{$worker->nombre}} {{$worker->apellido}}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Crear persona', ['class' => 'btn btn-primary float-right']) !!}
    <a href="{!! route('patients.index') !!}" class="btn btn-default float-right">Cancelar</a>


</div>