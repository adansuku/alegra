<!-- Dia Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dia_servicio', 'Dia Servicio:') !!}
    {!! Form::select('dia_servicio', ['Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes'], null, ['class' => 'form-control']) !!}
</div>

<!-- Horario Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horario_servicio', 'Horario Servicio:') !!}
    {!! Form::text('horario_servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Obs Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('obs_servicio', 'Obs Servicio:') !!}
    {!! Form::text('obs_servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('patient_service_id', 'Service Id:') !!}
    {!! Form::text('patient_service_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patientServicesDates.index') !!}" class="btn btn-default">Cancel</a>
</div>
