
<!-- Dia Servicio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dia_servicio', 'Dia Servicio:'); ?>

    <?php echo Form::select('dia_servicio', ['Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes'], null, ['class' => 'form-control']); ?>

</div>

<!-- Horario Servicio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('horario_servicio', 'Horario Servicio:'); ?>

    <?php echo Form::text('horario_servicio', null, ['class' => 'form-control']); ?>

</div>

<!-- Obs Servicio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('obs_servicio', 'Obs Servicio:'); ?>

    <?php echo Form::text('obs_servicio', null, ['class' => 'form-control']); ?>

</div>

<!-- Service Id Field
<div class="form-group col-sm-6">
    <?php echo Form::label('service_id', 'Service Id:'); ?>

    <?php echo Form::text('service_id', null, ['class' => 'form-control']); ?>

</div> -->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('patientServiceDates.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/resources/views/patient_service_dates/fields.blade.php ENDPATH**/ ?>