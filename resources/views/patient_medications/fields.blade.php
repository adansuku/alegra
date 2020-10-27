<!-- Medicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medicacion', 'Medicacion:') !!}
    {!! Form::text('medicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Pauta Medicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pauta_medicacion', 'Pauta Medicacion:') !!}
    {!! Form::text('pauta_medicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Obs Medicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('obs_medicacion', 'Obs Medicacion:') !!}
    {!! Form::text('obs_medicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::text('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patientMedications.index') !!}" class="btn btn-default">Cancel</a>
</div>
