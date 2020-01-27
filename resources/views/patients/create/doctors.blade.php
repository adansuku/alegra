<div class="row p-3 m-0">
 
 <!-- Nombre Doctor Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nombre_doctor', 'Nombre Doctor:') !!}
    {!! Form::text('nombre_doctor', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Observaciones Doctor Field -->
<div class="form-group col-sm-12">
{!! Form::label('observaciones_doctor', 'Centro de Referencia:') !!}
    {!! Form::text('observaciones_doctor', null, ['class' => 'form-control']) !!}
</div>

</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patientDoctors.index') !!}" class="btn btn-default">Cancelar</a>
</div>