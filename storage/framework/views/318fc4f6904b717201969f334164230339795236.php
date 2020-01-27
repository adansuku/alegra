<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $patientServiceDate->id; ?></p>
</div>

<!-- Dia Servicio Field -->
<div class="form-group">
    <?php echo Form::label('dia_servicio', 'Dia Servicio:'); ?>

    <p><?php echo $patientServiceDate->dia_servicio; ?></p>
</div>

<!-- Horario Servicio Field -->
<div class="form-group">
    <?php echo Form::label('horario_servicio', 'Horario Servicio:'); ?>

    <p><?php echo $patientServiceDate->horario_servicio; ?></p>
</div>

<!-- Obs Servicio Field -->
<div class="form-group">
    <?php echo Form::label('obs_servicio', 'Obs Servicio:'); ?>

    <p><?php echo $patientServiceDate->obs_servicio; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $patientServiceDate->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $patientServiceDate->updated_at; ?></p>
</div>

<!-- Service Id Field -->
<div class="form-group">
    <?php echo Form::label('service_id', 'Service Id:'); ?>

    <p><?php echo $patientServiceDate->service_id; ?></p>
    <p>Servicios: <?php echo $patientServiceDate->patientServices; ?></p>
</div>

<?php /**PATH /var/www/resources/views/patient_service_dates/show_fields.blade.php ENDPATH**/ ?>