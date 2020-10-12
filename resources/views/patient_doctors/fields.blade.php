<!-- Nombre Doctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_doctor', 'Nombre Doctor:') !!}
    {!! Form::text('nombre_doctor', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Doctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones_doctor', 'Observaciones Doctor:') !!}
    {!! Form::text('observaciones_doctor', null, ['class' => 'form-control']) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::text('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patientDoctors.index') !!}" class="btn btn-default">Cancel</a>
</div>
