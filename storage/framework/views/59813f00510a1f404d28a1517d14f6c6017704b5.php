<div class="row p-3 m-0">
    <!-- Fecha Paciente Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('fecha_paciente', 'Fecha:'); ?>

        <?php echo Form::date('fecha_paciente', null, ['class' => 'form-control','id'=>'fecha_paciente', 'required' =>
        'required']); ?>

    </div>



    <div class="form-group col-sm-6">
        <?php echo Form::label('documento_fecha_paciente', 'Documento:'); ?>

        <?php echo Form::select('documento_fecha_paciente',
        [
        null => '',
        'Si' => 'Si',
        'No' => 'No',
        ], null, ['class' => 'form-control',
        'required' => 'required',
        ]); ?>

    </div>


    <!-- Desc Fecha Paciente Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::label('desc_fecha_paciente', 'Motivo de la fecha:'); ?>

        <?php echo Form::select('desc_fecha_paciente',
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
        ]); ?>




        <script>
            $('#fecha_paciente_id').on('change', function() {
                $('#fecha_otros_pacientes').css('display', 'none');
                if ($(this).val() === 'Otros') {
                    $('#fecha_otros_pacientes').css('display', 'block');
                    $("#fecha_paciente_id").removeAttr('name');
                    $("#fecha_otros_pacientes").attr('name', 'desc_fecha_paciente');
                    $("#fecha_otros_pacientes").attr('required', 'required');
                }
                else{
                    $("#fecha_otros_pacientes").removeAttr('name');
                    $("#fecha_paciente_id").attr('name', 'desc_fecha_paciente');
                }
                 
            });
        </script>



        <?php echo Form::text('desc_fecha_paciente', null,
        ['class' => 'form-control bg-secondary p-3',
        'style' => 'display: none',
        'id' => 'fecha_otros_pacientes',
        'placeholder' => 'Otros (especificar)']
        ); ?>




    </div>

</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Añadir fecha', ['class' => 'btn btn-primary float-right']); ?>

</div><?php /**PATH /var/www/resources/views/patients/create/date.blade.php ENDPATH**/ ?>