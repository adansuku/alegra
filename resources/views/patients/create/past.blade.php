<div class="row">
<!-- Antecedentes Field -->
<div class="form-group col-sm-12">
    {!! Form::label('antecedentes', 'Antecedentes:') !!}
    {!! Form::select('antecedentes', [''=>'', 'Cáncer' => 'Cáncer', 'Operación (escribir)' => 'Operación (escribir)', 'Caída (escribir)' => 'Caída (escribir)', 'Crisis epilepsia' => 'Crisis epilepsia', 'Cardiopatía' => 'Cardiopatía', 'Prob. respiratorios' => 'Prob. respiratorios', 'Otras (escribir)' => 'Otras (escribir)'], null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Antecedentes Obs Field -->
<div class="form-group col-sm-12">
    {!! Form::label('antecedentes_obs', 'Especificaciones (solo si es necesario):') !!}
    {!! Form::text('antecedentes_obs', null, ['class' => 'form-control']) !!}
</div>

<!-- Antecedentes Anio Field -->
<div class="form-group col-sm-12">
    {!! Form::label('antecedentes_anio', 'Año:') !!}
    {!! Form::date('antecedentes_anio', null, ['class' => 'form-control','id'=>'antecedentes_anio', 'required' => 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patientPasts.index') !!}" class="btn btn-default">Cancelar</a>
</div>
</div>