@if(in_array(Auth::user()->role_id,[1]))
<div class="row">

    <div class="form-group col-sm-6">
        {!! Form::label('numero_expediente', 'Numero Expediente:') !!} {!! Form::text('numero_expediente', $numero_expediente, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
    </div>

    <!-- Fecha Alta Paciente Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fecha_alta_paciente', 'Fecha Alta:') !!} {!! Form::date('fecha_alta_paciente', null, ['class' => 'form-control','id'=>'fecha_alta_paciente', 'required' => 'required']) !!}
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
        {!! Form::label('nombre', 'Nombre:') !!} {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required' ]) !!}
    </div>

    <!-- Apellido Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('apellido', 'Apellidos:') !!} {!! Form::text('apellido', null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('worker_id', 'Trabajadora social gestora del caso:') !!}
        <select class="form-control select2" id="worker_id" name="worker_id[]" required multiple="multiple">
            @foreach($workers as $worker)
            @if ($worker->cat_profesional == 'Trabajadora Social')
            <option value="{{$worker->id}}">{{$worker->nombre}} {{$worker->apellido}}</option>
            @endif
            @endforeach
        </select>
    </div>
</div>

{{--
<p>{!! Form::label('convive_con', 'Convive con (nombre/s/parentesco/s):') !!}

    <select class="form-control select2" id="convive_con" name="convive_con[]" multiple="multiple">
        <option {{ in_array('Abuela/o', $patient->convive_con) ? 'selected':'' }}>Abuela/o</option>
<option {{ in_array('Padre', $patient->convive_con) ? 'selected':'' }}>Padre</option>
<option {{ in_array('Madre', $patient->convive_con) ? 'selected':'' }}>Madre</option>
<option {{ in_array('Hija/o', $patient->convive_con) ? 'selected':'' }}>Hija/o</option>
<option {{ in_array('Hermana/o', $patient->convive_con) ? 'selected':'' }}>Hermana/o</option>
<option {{ in_array('Nuera', $patient->convive_con) ? 'selected':'' }}> Nuera</option>
<option {{ in_array('Yerno', $patient->convive_con) ? 'selected':'' }}>Yerno</option>
<option {{ in_array('Cuidador/a profesional' , $patient->convive_con) ? 'selected':'' }}>Cuidador/a profesional
</option>
<option {{ in_array('Nieta/o', $patient->convive_con) ? 'selected':'' }}>Nieta/o</option>
<option {{ in_array('Sobrina/o', $patient->convive_con) ? 'selected':'' }}>Sobrina/o</option>
<option {{ in_array('Pareja', $patient->convive_con) ? 'selected':'' }}>Pareja</option>
<option {{ in_array('Sola', $patient->convive_con) ? 'selected':'' }}>Sola</option>
<option {{ in_array('Otros', $patient->convive_con) ? 'selected':'' }}>Otros</option>
@if ($patient->convive_con == null)
$patient->convive_con[0] = "vacio"
@endif
</select>
</p> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Crear persona', ['class' => 'btn btn-primary float-right']) !!}
    <a href="{!! route('patients.index') !!}" class="btn btn-default float-right">Cancelar</a>


</div>
@endif