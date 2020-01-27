<!-- Antecedentes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('antecedentes', 'Antecedentes:') !!}
    {!! Form::select('antecedentes', ['Cáncer' => 'Cáncer', 'Operación (escribir)' => 'Operación (escribir)', 'Caída (escribir)' => 'Caída (escribir)', 'Crisis epilepsia' => 'Crisis epilepsia', 'Cardiopatía' => 'Cardiopatía', 'Prob. respiratorios' => 'Prob. respiratorios', 'Otras (escribir)' => 'Otras (escribir)'], null, ['class' => 'form-control']) !!}
</div>

<!-- Antecedentes Obs Field -->
<div class="form-group col-sm-6">
    {!! Form::label('antecedentes_obs', 'Observaciones:') !!}
    {!! Form::text('antecedentes_obs', null, ['class' => 'form-control']) !!}
</div>

<!-- Antecedentes Anio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('antecedentes_anio', 'Año:') !!}
    {!! Form::date('antecedentes_anio', null, ['class' => 'form-control','id'=>'antecedentes_anio']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#antecedentes_anio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::text('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patientPasts.index') !!}" class="btn btn-default">Cancelar</a>
</div>
