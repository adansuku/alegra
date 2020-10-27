<!-- Dia Trans Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dia_trans', 'Dia Trans:') !!}
    {!! Form::select('dia_trans', ['Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' =>
    'Jueves', 'Viernes' => 'Viernes'], null, ['class' => 'form-control']) !!}
</div>

<!-- Tray Trans Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tray_trans', 'Tray Trans:') !!}
    {!! Form::select('tray_trans', ['Ida' => 'Ida', 'Vuelta' => 'Vuelta', 'Ida y Vuelta' => 'Ida y Vuelta'], null,
    ['class' => 'form-control']) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::text('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patientTransports.index') !!}" class="btn btn-default">Cancel</a>
</div>