<div class="row p-3 m-0">
    <!-- Fecha Paciente Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fecha_paciente', 'Fecha:') !!}
        {!! Form::date('fecha_paciente', null, ['class' => 'form-control','id'=>'fecha_paciente', 'required' =>
        'required']) !!}
    </div>



    <div class="form-group col-sm-6">
        {!! Form::label('documento_fecha_paciente', 'Documento:') !!}
        {!! Form::select('documento_fecha_paciente',
        [
        null => '',
        'Si' => 'Si',
        'No' => 'No',
        ], null, ['class' => 'form-control',
        'required' => 'required',
        ]) !!}
    </div>


    <!-- Desc Fecha Paciente Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('desc_fecha_paciente', 'Motivo de la fecha:') !!}
        {!! Form::select('desc_fecha_paciente',
        [
        null => '',
        'Solicitud grado' => 'Solicitud Grado',
        'Resolución grado' => 'Resolución Grado',
        'Resolución PIA' => 'Resolución PIA',
        'solicitud revisión grado' => 'Solicitud Revisión Grado',
        'Otros' => 'Otros',
        ], null, ['class' => 'form-control',
        'required' => 'required',
        'id' => 'fecha_paciente_id',
        ]) !!}



        <script>
            $('#fecha_paciente_id').on('change', function() {
                if ($(this).val() == 'Otros') {
                    $('#fecha_otros_pacientes').css('display', 'block');
                    $("#fecha_paciente_id").removeAttr('name', 'desc_fecha_paciente');
                    $("#fecha_otros_pacientes_input").attr('name', 'desc_fecha_paciente');
                    $("#fecha_otros_pacientes_input").attr('required', 'required');
                }
                else{
                    $("#fecha_otros_pacientes_input").removeAttr('name','desc_fecha_paciente');
                    $("#fecha_paciente_id").attr('name', 'desc_fecha_paciente');
                }
                 
            });
        </script> 


        <div class="bg-secondary p-3" id="fecha_otros_pacientes" style="display: none;">
                {!! Form::text('', null,['class' => 'form-control', 'id' => 'fecha_otros_pacientes_input']) !!}
        </div>


    </div>

</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Añadir fecha', ['class' => 'btn btn-primary float-right']) !!}
</div>