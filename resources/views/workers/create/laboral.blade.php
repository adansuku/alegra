<!-- Lab Servicio Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_servicio', 'Centro/Servicio/Proyecto:') !!}
    {!! Form::text('lab_servicio', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Lab Dias Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_dias', 'Días:') !!}
    {!! Form::select('lab_dias', [' Lunes' => ' Lunes', ' Martes' => ' Martes', ' Miércoles' => ' Miércoles', ' Jueves' => ' Jueves', ' Viernes' => ' Viernes', ' Sábado' => ' Sábado', ' Domingo' => ' Domingo'], null, ['class' => 'form-control',  'required' => 'required']) !!}
</div>

<!-- Lab Horas Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_horas', 'Horas:') !!}
    {!! Form::number('lab_horas', null, ['class' => 'form-control',  'required' => 'required']) !!}
</div>

<!-- Lab Horas Semana Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lab_horas_semana', 'Nº Horas/Semanal:') !!}
    {!! Form::number('lab_horas_semana', null, ['class' => 'form-control',  'required' => 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Añadir relación laboral', ['class' => 'btn btn-primary']) !!}
    {!! Form::submit('Cancelar', ['class' => 'btn btn-danger float-right', 'data-dismiss' => 'modal']) !!}
</div>



