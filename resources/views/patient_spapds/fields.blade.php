<!-- Prog Spapd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prog_spapd', 'Prog Spapd:') !!}
    {!! Form::select('prog_spapd', ['Estimulación Cognitiva (EC)' => 'Estimulación Cognitiva (EC)', ' Fisioterapia' => ' Fisioterapia', ' Apoyo Emocional' => ' Apoyo Emocional', ' Terapia Ocupacional' => ' Terapia Ocupacional', ' Logopedia' => ' Logopedia', ' Otros' => ' Otros'], null, ['class' => 'form-control']) !!}
</div>

<!-- Otros Programa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otros_programa', 'Otros Programa:') !!}
    {!! Form::text('otros_programa', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Sesiones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_sesiones', 'Num Sesiones:') !!}
    {!! Form::number('num_sesiones', null, ['class' => 'form-control']) !!}
</div>

<!-- Otras Sesiones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('otras_sesiones', 'Otras Sesiones:') !!}
    {!! Form::text('otras_sesiones', null, ['class' => 'form-control']) !!}
</div>

<!-- Dur Spapd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dur_spapd', 'Dur Spapd:') !!}
    {!! Form::select('dur_spapd', ['50' => '50', '60' => '60', '75' => '75', '100' => '100', '150' => '150', 'otra' => 'otra'], null, ['class' => 'form-control']) !!}
</div>

<!-- Worker Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('worker_id', 'Worker Id:') !!}
    {!! Form::text('worker_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::text('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patientSpapds.index') !!}" class="btn btn-default">Cancel</a>
</div>
