<!-- Prog Centro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prog_centro', 'Prog Centro:') !!}
    {!! Form::select('prog_centro', [
        'Programa de Estimulación Cognitiva'=>'Programa de Estimulación Cognitiva',
        'Programa de Asesoramiento y Orientación (Apoyo Emocional)' => 'Programa de Asesoramiento y Orientación (Apoyo Emocional)',
        'Programa de promoción, mantenimiento y recuperación de la autonomía funcional.' => 'Programa de promoción, mantenimiento y recuperación de la autonomía funcional.',
        'Programa de asistencia y formación en tecnologías de apoyo y adaptaciones' => 'Programa de asistencia y formación en tecnologías de apoyo y adaptaciones',
        'Programa de Terapia' => 'Programa de Terapia',
        'Ocupacional' => 'Ocupacional',
        'Programa de Apoyo Social' => 'Programa de Apoyo Social',
        'Programa de Formación en cuidados' => 'Programa de Formación en cuidados',
        'Programa de Hogar Accesible y Funcional' => 'Programa de Hogar Accesible y Funcional',
        'Programa de Asesoramiento' => 'Programa de Asesoramiento',
        'Jurídico' => 'Jurídico',
        'Manutención' => 'Manutención',
        'Transporte' => 'Transporte',
        'Atención Sanitaria' => 'Atención Sanitaria',
        'Atención social' => 'Atención social'], null, ['class' => 'form-control']) !!}
</div>

<!-- Num Sesiones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_sesiones', 'Num Sesiones:') !!}
    {!! Form::number('num_sesiones', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('patientCentro.index') !!}" class="btn btn-default">Cancel</a>
</div>