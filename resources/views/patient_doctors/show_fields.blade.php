<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $patientDoctor->id !!}</p>
</div>

<!-- Nombre Doctor Field -->
<div class="form-group">
    {!! Form::label('nombre_doctor', 'Nombre Doctor:') !!}
    <p>{!! $patientDoctor->nombre_doctor !!}</p>
</div>

<!-- Observaciones Doctor Field -->
<div class="form-group">
    {!! Form::label('observaciones_doctor', 'Observaciones Doctor:') !!}
    <p>{!! $patientDoctor->observaciones_doctor !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $patientDoctor->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $patientDoctor->updated_at !!}</p>
</div>

<!-- Patient Id Field -->
<div class="form-group">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{!! $patientDoctor->patient_id !!}</p>
</div>

