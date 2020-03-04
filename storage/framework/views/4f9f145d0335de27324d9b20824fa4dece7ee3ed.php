<div class="row">
    <div class="form-group col-sm-6">
        <?php echo Form::label('dia_servicio', 'Dia del servicio:'); ?>

        <?php echo Form::select('dia_servicio', [null => '',
        'Lunes' => 'Lunes',
        'Martes' => 'Martes',
        'Miércoles' => 'Miércoles',
        'Jueves' => 'Jueves',
        'Viernes' => 'Viernes',
        'de Lunes a Viernes' => 'de Lunes a Viernes'],
        null, ['class' => 'form-control', 'required' => 'required']); ?>

    </div>

    <!-- Horario Servicio Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('horario_servicio', 'Horario del servicio:'); ?>

        <?php echo Form::select('horario_servicio',
        [null => '',
        '9:00 - 13:00' => '9:00 - 13:00',
        '9:00 -17:00' => '9:00 - 17:00',
        '17:00 - 20:00' => '17:00 - 20:00',
        '10:00 - 13:00' => '10:00 -13:00',
        'Otros' => 'Otros'
        ],
        null, ['class' => 'form-control', 'required' => 'required', 'id' => 'horario_servicio']); ?>



    </div>

    <!-- Obs Servicio Field -->
    <div class="form-group col-sm-6">
        <?php echo Form::label('obs_servicio', 'Observaciones del horario:'); ?>

        <?php echo Form::text('obs_servicio', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group col-sm-6">
        <div class="horario_servicio_otros bg-secondary p-3" style="display: none;">
            <?php echo Form::label('horario_servicio', 'Otro horario (especificar):'); ?>

            <?php echo Form::text('horario_servicio', null, ['class' => 'form-control', 'id' => 'horario_otros' ]); ?>

        </div>
        <script>
            $('#horario_servicio').on('change', function() {
            $('.horario_servicio_otros').css('display', 'none');
            if ($(this).val() === 'Otros') {
                $('.horario_servicio_otros').css('display', 'block');
                $("#horario_servicio").removeAttr('name');
                $("#horario_otros").attr('name', 'horario_servicio');
                $("#horario_otros").attr('required', 'required');
            } else {
                $("#horario_otros").removeAttr('name');
                $("#horario_servicio").attr('name', 'horario_servicio');
            }

        });
        </script>
    </div>

    <!-- Service Id Field -->
    <div class="form-group col-sm-6" hidden>
        <?php echo Form::label('patient_service_id', 'Service Id:'); ?>

        <?php echo Form::text('patient_service_id', null, ['class' => 'form-control']); ?>

    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    </div>
</div><?php /**PATH /var/www/resources/views/patients/create/services_dates.blade.php ENDPATH**/ ?>