<!-- Fecha Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_paciente', 'Fecha Paciente:') !!}
    {!! Form::date('fecha_paciente', null, ['class' => 'form-control','id'=>'fecha_paciente']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha_paciente').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Desc Fecha Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc_fecha_paciente', 'Desc Fecha Paciente:') !!}
    {!! Form::text('desc_fecha_paciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::text('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patientDates.index') !!}" class="btn btn-default">Cancel</a>
</div>
